{{-- checkbox --}}
<?php
$disabled = '';
if (
	(isset($xPanel) && !$xPanel->hasAccess('delete'))
	or
	(
		/* Security for Admin Users */
		str_contains(\Illuminate\Support\Facades\Route::currentRouteAction(), 'UserController') && (isset($entry->is_admin) && $entry->is_admin == 1)
	)
) {
	$disabled = 'disabled="disabled"';
}
?>
<td class="dt-checkboxes-cell">
	<input name="entryId[]" type="checkbox" value="{{ $entry->{$column['name']} }}" class="dt-checkboxes" {!! $disabled !!}>
</td>
