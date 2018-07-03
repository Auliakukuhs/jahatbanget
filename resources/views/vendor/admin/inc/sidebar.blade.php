@if (auth()->check())
	<?php
    // Admin URL Base
    $adminBase = config('larapen.admin.route_prefix', 'admin');
	
	// Get plugins admin menu
	$pluginsMenu = '';
	$plugins = plugin_installed_list();
	if (count($plugins) > 0) {
	    foreach($plugins as $plugin) {
	        if (method_exists($plugin->class, 'getAdminMenu')) {
            	$pluginsMenu .= call_user_func($plugin->class . '::getAdminMenu');
            }
		}
	}
	?>
    <style>
        #adminSidebar ul li span {
            text-transform: capitalize;
        }
    </style>
	<!-- Left side column. contains the sidebar -->
	<aside class="main-sidebar" id="adminSidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">

			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="{{ Gravatar::fallback(url('images/user.jpg'))->get(auth()->user()->email) }}" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p>{{ auth()->user()->name }}</p>
					<a href="#"><i class="fa fa-circle text-success"></i> {{ trans('admin::messages.Online') }}</a>
				</div>
			</div>

			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="header">{{ trans('admin::messages.administration') }}</li>
				<!-- ================================================ -->
				<!-- ==== Recommended place for admin menu items ==== -->
				<!-- ================================================ -->
				<li><a href="{{ url($adminBase . '/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('admin::messages.dashboard') }}</span></a></li>

				<li class="treeview">
					<a href="#"><i class="fa fa-table"></i><span>{{ trans('admin::messages.ads') }}</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li>
							<a href="{{ url($adminBase . '/posts') }}">
                                <i class="fa fa-table"></i> <span>{{ trans('admin::messages.list') }}</span>
							</a>
						</li>
                        <li><a href="{{ url($adminBase . '/categories') }}"><i class="fa fa-folder"></i> <span>{{ trans('admin::messages.categories') }}</span></a></li>
                        <li><a href="{{ url($adminBase . '/pictures') }}"><i class="fa fa-picture-o"></i> <span>{{ trans('admin::messages.pictures') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/p_types') }}"><i class="fa fa-cog"></i> <span>{{ trans('admin::messages.ad types') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/custom_fields') }}"><i class="fa fa-list-alt"></i> <span>{{ trans('admin::messages.custom fields') }}</span></a></li>
					</ul>
				</li>
				
				<li class="treeview">
					<a href="#"><i class="fa fa-table"></i><span>{{ trans('admin::messages.users') }}</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li>
							<a href="{{ url($adminBase . '/users') }}">
								<i class="fa fa-users"></i> <span>{{ trans('admin::messages.list') }}</span>
							</a>
						</li>
						<li><a href="{{ url($adminBase . '/genders') }}"><i class="fa fa-language"></i> <span>{{ trans('admin::messages.titles') }}</span></a></li>
					</ul>
				</li>
				
				<li><a href="{{ url($adminBase . '/payments') }}"><i class="fa fa-usd"></i> <span>{{ trans('admin::messages.payments') }}</span></a></li>
				<li><a href="{{ url($adminBase . '/pages') }}"><i class="fa fa-clone"></i> <span>{{ trans('admin::messages.pages') }}</span></a></li>
				{!! $pluginsMenu !!}
				
				<!-- ======================================= -->
				<li class="header">{{ trans('admin::messages.configuration') }}</li>
				<li class="treeview">
					<a href="#"><i class="fa fa-cog"></i> <span>{{ trans('admin::messages.setup') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="{{ url($adminBase . '/settings') }}"><i class="fa fa-cog"></i> <span>{{ trans('admin::messages.general settings') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/homepage') }}"><i class="fa fa-home"></i> <span>{{ trans('admin::messages.homepage') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/languages') }}"><i class="fa fa-language"></i> <span>{{ trans('admin::messages.languages') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/meta_tags') }}"><i class="fa fa-bookmark-o"></i> <span>{{ trans('admin::messages.meta tags') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/packages') }}"><i class="fa fa-pie-chart"></i> <span>{{ trans('admin::messages.packages') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/payment_methods') }}"><i class="fa fa-credit-card"></i> <span>{{ trans('admin::messages.payment methods') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/advertisings') }}"><i class="fa fa-life-ring"></i> <span>{{ trans('admin::messages.advertising') }}</span></a></li>
						<li class="treeview">
							<a href="#"><i class="fa fa-globe"></i> <span>{{ trans('admin::messages.international') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
							<ul class="treeview-menu">
								<li><a href="{{ url($adminBase . '/countries') }}"><i class="fa fa-circle-o"></i> <span>{{ trans('admin::messages.countries') }}</span></a></li>
								<li><a href="{{ url($adminBase . '/currencies') }}"><i class="fa fa-circle-o"></i> <span>{{ trans('admin::messages.currencies') }}</span></a></li>
								<li><a href="{{ url($adminBase . '/time_zones') }}"><i class="fa fa-circle-o"></i> <span>{{ trans('admin::messages.time zones') }}</span></a></li>
							</ul>
						</li>
						<li><a href="{{ url($adminBase . '/blacklists') }}"><i class="fa fa-ban"></i> <span>{{ trans('admin::messages.blacklist') }}</span></a></li>
						<li><a href="{{ url($adminBase . '/report_types') }}"><i class="fa fa-language"></i> <span>{{ trans('admin::messages.report types') }}</span></a></li>
					</ul>
				</li>
				
				<li><a href="{{ url($adminBase . '/plugins') }}"><i class="fa fa-cogs"></i> <span>{{ trans('admin::messages.plugins') }}</span></a></li>
				<li><a href="{{ url($adminBase . '/actions/clear_cache') }}"><i class="fa fa-refresh"></i> <span>{{ trans('admin::messages.clear cache') }}</span></a></li>
				<li><a href="{{ url($adminBase . '/backups') }}"><i class="fa fa-hdd-o"></i> <span>{{ trans('admin::messages.backups') }}</span></a></li>
				
				@if (app()->isDownForMaintenance())
					<li>
						<a href="{{ url($adminBase . '/actions/maintenance_up') }}" data-toggle="tooltip" title="{{ trans('admin::messages.Leave Maintenance Mode') }}">
							<i class="fa fa-hdd-o"></i> <span>{{ trans('admin::messages.Live Mode') }}</span>
						</a>
					</li>
				@else
					<li>
						<a href="#" data-toggle="modal" data-target="#maintenanceMode" title="{{ trans('admin::messages.Put in Maintenance Mode') }}">
							<i class="fa fa-hdd-o"></i> <span>{{ trans('admin::messages.Maintenance Mode') }}</span>
						</a>
					</li>
				@endif
			
				<!-- ======================================= -->
				<li class="header">{{ trans('admin::messages.user_panel') }}</li>
				<li><a href="{{ url($adminBase . '/account') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('admin::messages.my account') }}</span></a></li>
				<li><a href="{{ url($adminBase . '/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('admin::messages.logout') }}</span></a></li>
			</ul>

		</section>
		<!-- /.sidebar -->
	</aside>
@endif
