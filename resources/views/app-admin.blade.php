<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-fonts.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace.css')) !!}


</head>
<body  class="no-skin">

		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							Dday Admin
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">{{$count_subscripe}}</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									<span><a href="{{action('AdminController@getSubscripe')}}">{{$count_subscripe}} Messages</a></span>
								</li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/assets/admin/plugins/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							
								<li>
									<a href="{{action('AdminController@getLogout')}}">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<li class="active">
						<a href="{{action('AdminController@getDashboard')}}">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-users"></i>
							<span class="menu-text">
								Users
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{action('AdminController@getAllUsers')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Users List
								</a>
							</li>

							<li class="">
								<a href="{{action('AdminController@getFacebookUsers')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Facebook users list
								</a>

								<b class="arrow"></b>
							</li>
							
							<li class="">
								<a href="{{action('AdminController@getGoogleUsers')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Google users list
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="{{action('AdminController@getTweeterUsers')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Twitter user list
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-folder-open-o"></i>
							<span class="menu-text">
								Pages
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
										<span class="menu-text">
											Sport
										</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="{{action('AdminController@getSportList')}}">
											Sport List
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="{{action('AdminController@getAddSport')}}">
											Add Sport
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
										<span class="menu-text">
											News
										</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="{{action('AdminController@getNewsList')}}">
											News List
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="{{action('AdminController@getAddNews')}}">
											Add News
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
										<span class="menu-text">
											Interest
										</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="{{action('AdminController@getInteresList')}}">
											Interest List
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="{{action('AdminController@getAddInteres')}}">
											Add Interest
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>

							<li class="">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-caret-right"></i>
										<span class="menu-text">
											Game
										</span>
									<b class="arrow fa fa-angle-down"></b>
								</a>
								<b class="arrow"></b>
								<ul class="submenu">
									<li class="">
										<a href="{{action('AdminController@gamePageList')}}">
											Games List
										</a>
										<b class="arrow"></b>
									</li>
									<li class="">
										<a href="{{action('AdminController@getGames')}}">
											Add Games
										</a>
										<b class="arrow"></b>
									</li>
								</ul>
							</li>



						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-language"></i>
							<span class="menu-text">
								Languages
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{action('AdminController@getLanguage')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Add languages
								</a>
							</li>

							<li class="">
								<a href="{{action('AdminController@getLanguageList')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									languages List
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-file-text-o"></i>
							<span class="menu-text">
								Articles
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{action('AdminController@getArticleList')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Article List
								</a>
							</li>

							<li class="">
								<a href="{{action('AdminController@getAddArticle')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Article
								</a>

								<b class="arrow"></b>
							</li>
							
						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-picture-o"></i>
							<span class="menu-text">
								Gallery
							</span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="{{action('AdminController@getGallery')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Gallery List
								</a>
							</li>
							<li class="">
								<a href="{{action('AdminController@getAddGallery')}}">
									<i class="menu-icon fa fa-caret-right"></i>
									Add Gallery
								</a>
								<b class="arrow"></b>
							</li>
							
						</ul>
						
					</li>



					<li class="">
						<a href="{{action('AdminController@getYoutube')}}">
							<i class="menu-icon fa fa-youtube-play"></i>
							<span class="menu-text"> youtube </span>
						</a>
						<b class="arrow"></b>
					</li>

				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->

						
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">



						<div class="row">
							<div class="col-xs-12">
								@yield('admin-content')	
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Dday</span>
							Application &copy; 2016
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
							<a href="#">
								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
							</a>

							<a href="#">
								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
							</a>
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->











	


 
	{!! HTML::script( asset('assets/admin/plugins/js/jquery.js') ) !!}  

	{!! HTML::script( asset('assets/admin/plugins/js/ace-extra.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/jquery.mobile.custom.js') ) !!} 

	{!! HTML::script( asset('assets/admin/plugins/js/bootstrap.js') ) !!}

		{!! HTML::script( asset('assets/admin/plugins/js/date-time/bootstrap-datepicker.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/jqGrid/jquery.jqGrid.src.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/jqGrid/i18n/grid.locale-en.js') ) !!} 

	{!! HTML::script( asset('assets/admin/plugins/js/jquery.colorbox.js') ) !!}  
	{!! HTML::script( asset('assets/admin/plugins/js/jquery-ui.custom.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/jquery.ui.touch-punch.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/jquery.easypiechart.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/jquery.sparkline.js') ) !!} 

	{!! HTML::script( asset('assets/admin/plugins/js/flot/jquery.flot.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/flot/jquery.flot.pie.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/flot/jquery.flot.resize.js') ) !!} 

	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.scroller.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.colorpicker.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.fileinput.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.typeahead.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.wysiwyg.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.spinner.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.treeview.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.wizard.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.aside.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.ajax-content.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.touch-drag.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.sidebar.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.sidebar-scroll-1.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.submenu-hover.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.widget-box.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.settings.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.settings-rtl.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.settings-skin.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.widget-on-reload.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.searchbox-autocomplete.js') ) !!} 


	<!-- inline scripts related to this page -->
	
	{!! HTML::style( asset('assets/admin/plugins/css/ace.onpage-help.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/sunburst.css')) !!}

	<script type="text/javascript"> ace.vars['base'] = '..'; </script>



	@yield('script')

	{!! HTML::script(asset('assets/admin/js/main.js') ) !!} 


</body>
</html>