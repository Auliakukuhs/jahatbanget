<?php
/**
 * LaraClassified - Geo Classified Ads CMS
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

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\LocalizationTrait;
use App\Http\Controllers\Traits\PluginsTrait;
use App\Http\Controllers\Traits\RobotsTxtTrait;
use App\Http\Controllers\Traits\SettingsTrait;

class FrontController extends Controller
{
	use LocalizationTrait, SettingsTrait, RobotsTxtTrait, PluginsTrait;
	
	public $request;
	public $data = [];
	
	/**
	 * FrontController constructor.
	 */
	public function __construct()
	{
		// Load the Plugins
		$this->loadPlugins();
		
		// From Laravel 5.3.4+
		$this->middleware(function ($request, $next)
		{
			$this->loadLocalizationData();
			$this->checkDotEnvEntries();
			$this->applyFrontSettings();
			$this->checkRobotsTxtFile();
			
			return $next($request);
		});
		
		// Check the 'Currency Exchange' plugin
		if (config('plugins.currencyexchange.installed')) {
			$this->middleware(['currencies', 'currencyExchange']);
		}
		
		// Check the 'Domain Mapping' plugin
		if (config('plugins.domainmapping.installed')) {
			$this->middleware(['domainVerification']);
		}
	}
}
