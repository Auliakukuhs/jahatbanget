<?php
/**
 * LaraClassified - Geo Classified Ads Software
 * Copyright (c) BedigitCom. All Rights Reserved
 *
 * Website: http://www.bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from Codecanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Http\Controllers\Admin;

use App\Helpers\Lang\LangManager;
use App\Models\HomeSection;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Jackiedo\DotenvEditor\Facades\DotenvEditor;
use Larapen\Admin\app\Http\Controllers\Controller;
use Prologue\Alerts\Facades\Alert;

class ActionController extends Controller
{
	/**
	 * ActionController constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		
		$this->middleware('demo');
	}
	
	/**
	 * Clear Cache
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function clearCache()
	{
		$errorFound = false;
		
		if (session()->has('curr')) {
			session()->forget('curr');
		}
		
		// Removing all Objects Cache
		try {
			$exitCode = Artisan::call('cache:clear');
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Some time of pause
		sleep(2);
		
		// Removing all Views Cache
		try {
			$exitCode = Artisan::call('view:clear');
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Some time of pause
		sleep(1);
		
		// Removing all Logs
		try {
			File::delete(File::glob(storage_path('logs') . '/laravel*.log'));
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Removing all /.env cached files
		try {
			DotenvEditor::deleteBackups();
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans("admin::messages.The cache was successfully dumped.");
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Test the Ads Cleaner Command
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function callAdsCleanerCommand()
	{
		$errorFound = false;
		
		// Run the Cron Job command manually
		try {
			$exitCode = Artisan::call('ads:clean');
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans("admin::messages.The Cron Job command was successfully run.");
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Put to maintenance Mode
	 *
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function maintenanceDown(Request $request)
	{
		// Form validation
		$rules = [
			'message' => 'max:200',
		];
		$this->validate($request, $rules);
		
		$errorFound = false;
		
		// Go to maintenance with DOWN status
		try {
			if ($request->has('message')) {
				$exitCode = Artisan::call('down', ['--message' => $request->input('message')]);
			} else {
				$exitCode = Artisan::call('down');
			}
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans("admin::messages.The website has been putted in maintenance mode.");
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Back to Maintenance Mode
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function maintenanceUp()
	{
		$errorFound = false;
		
		// Restore system UP status
		try {
			$exitCode = Artisan::call('up');
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans("admin::messages.The website has left the maintenance mode.");
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * (Try to) Fill the missing lines in all languages files
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function syncLanguageFilesLines()
	{
		$errorFound = false;
		
		try {
			// Get the current Default Language
			$defaultLang = Language::where('default', 1)->first();
			
			// Init. the language manager
			$manager = new LangManager();
			
			// Get all the others languages
			$locales = $manager->getLocales($defaultLang->abbr);
			if (!empty($locales)) {
				foreach ($locales as $locale) {
					$manager->syncLines($defaultLang->abbr, $locale);
				}
			}
		} catch (\Exception $e) {
			Alert::error($e->getMessage())->flash();
			$errorFound = true;
		}
		
		// Check if error occurred
		if (!$errorFound) {
			$message = trans("admin::messages.The languages files were been synchronized.");
			Alert::success($message)->flash();
		}
		
		return redirect()->back();
	}
	
	/**
	 * Homepage Sections Actions (Reset Order & Settings)
	 *
	 * @param $action
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function homepage($action)
	{
		// Reset the homepage sections reorder.
		if ($action == 'reset_reorder') {
			HomeSection::where('method', 'getSearchForm')->update(['lft' => 0, 'rgt' => 1, 'active' => 1]);
			HomeSection::where('method', 'getLocations')->update(['lft' => 2, 'rgt' => 3, 'active' => 1]);
			HomeSection::where('method', 'getSponsoredPosts')->update(['lft' => 4, 'rgt' => 5, 'active' => 1]);
			HomeSection::where('method', 'getCategories')->update(['lft' => 6, 'rgt' => 7, 'active' => 1]);
			HomeSection::where('method', 'getLatestPosts')->update(['lft' => 8, 'rgt' => 9, 'active' => 1]);
			HomeSection::where('method', 'getStats')->update(['lft' => 10, 'rgt' => 11, 'active' => 1]);
			HomeSection::where('method', 'getTopAdvertising')->update(['lft' => 12, 'rgt' => 13, 'active' => 0]);
			HomeSection::where('method', 'getBottomAdvertising')->update(['lft' => 14, 'rgt' => 15, 'active' => 0]);
			
			$message = trans("admin::messages.The homepage sections reorganization were been reset successfully.");
			Alert::success($message)->flash();
		}
		
		// Reset all the homepage settings.
		if ($action == 'reset_settings') {
			HomeSection::where('method', 'getSearchForm')->update(['value' => null, 'active' => 1]);
			HomeSection::where('method', 'getLocations')->update(['value' => null, 'active' => 1]);
			HomeSection::where('method', 'getSponsoredPosts')->update(['value' => null, 'active' => 1]);
			HomeSection::where('method', 'getCategories')->update(['value' => null, 'active' => 1]);
			HomeSection::where('method', 'getLatestPosts')->update(['value' => null, 'active' => 1]);
			HomeSection::where('method', 'getStats')->update(['value' => null, 'active' => 1]);
			HomeSection::where('method', 'getTopAdvertising')->update(['value' => null, 'active' => 0]);
			HomeSection::where('method', 'getBottomAdvertising')->update(['value' => null, 'active' => 0]);
			
			// Delete files which has 'header-' as prefix
			try {
				
				// List all files in the "app/logo/" path,
				// Filter the ones that match the "*header-*.*" pattern,
				// And delete them.
				$allFiles = Storage::files('app/logo/');
				$matchingFiles = preg_grep('/.+\/header-.+\./', $allFiles);
				Storage::delete($matchingFiles);
				
			} catch (\Exception $e) {}
			
			$message = trans("admin::messages.All the homepage settings were been reset successfully.");
			Alert::success($message)->flash();
		}
		
		if (in_array($action, ['reset_reorder', 'reset_settings'])) {
			Cache::flush();
		} else {
			$message = trans("admin::messages.No action has been performed.");
			Alert::warning($message)->flash();
		}
		
		return redirect()->back();
	}
}
