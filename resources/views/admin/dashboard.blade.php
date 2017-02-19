@extends('app-admin')
@section('admin-content')
	
	<div class="alert alert-block alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>

		<i class="ace-icon fa fa-check green"></i>

		Welcome to
		<strong class="green">
			the Dday
		</strong>,
		
	</div>
<div class="row">
		<div class="space-6"></div>

		<div class="col-sm-7 infobox-container">
			<!-- #section:pages/dashboard.infobox -->
			<div class="infobox infobox-green">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-user"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number">{{count($all_user_reg)}}</span>
					<div class="infobox-content"></div>
				</div>

				<!-- #section:pages/dashboard.infobox.stat -->
				<div class="stat stat-success">8%</div>

				<!-- /section:pages/dashboard.infobox.stat -->
			</div>

			<div class="infobox infobox-blue">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-twitter"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number">{{count($tweeter_user)}}</span>
				</div>

				<div class="badge badge-success">
					+32%
					<i class="ace-icon fa fa-arrow-up"></i>
				</div>
			</div>

			<div class="infobox infobox-pink">
				<div class="infobox-icon">
					<i style="background-color: #3356b7;" class="ace-icon fa fa-facebook-square fa-2x blue"></i>
				</div>

				<div class="infobox-data">
					<span style="color:#3356b7" class="infobox-data-number">{{count($face_user)}}</span>
					<div class="infobox-content"></div>
				</div>
				<!-- <div class="stat stat-important">4%</div> -->
			</div>

			<div class="infobox infobox-red">
				<div class="infobox-icon">
					<i class="ace-icon fa fa-google-plus"></i>
				</div>

				<div class="infobox-data">
					<span class="infobox-data-number">{{count($google_user)}}</span>
					<div class="infobox-content"></div>
				</div>
			</div>

			<div class="infobox infobox-orange2">
				<!-- #section:pages/dashboard.infobox.sparkline -->
				<div class="infobox-chart">
					<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
				</div>

				<!-- /section:pages/dashboard.infobox.sparkline -->
				<div class="infobox-data">
					<div class="infobox-icon">
						<i class="fa fa-users"></i>
					</div>
					<span class="infobox-data-number">{{count($all_user)}}</span>
					<div class="infobox-content"></div>
				</div>

				<div class="badge badge-success">
					7.2%
					<i class="ace-icon fa fa-arrow-up"></i>
				</div>
			</div>

			<div class="infobox infobox-blue2">



			</div>

			<!-- /section:pages/dashboard.infobox -->
			<div class="space-6"></div>

										
</div>

	<div class="vspace-12-sm"></div>
		<div class="col-sm-5">
			<div class="widget-box">
				<div class="widget-header widget-header-flat widget-header-small">
					<h5 class="widget-title">
						<i class="ace-icon fa fa-signal"></i>
						Traffic Sources
					</h5>

					<div class="widget-toolbar no-border">
						<div class="inline dropdown-hover">
							<button class="btn btn-minier btn-primary">
								This Week
								<i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
							</button>

							<ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
								<li class="active">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
										This Week
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
										Last Week
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
										This Month
									</a>
								</li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
										Last Month
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="widget-body">
					<div class="widget-main">
						<!-- #section:plugins/charts.flotchart -->
						<div id="piechart-placeholder"></div>

						<!-- /section:plugins/charts.flotchart -->
						<div class="hr hr8 hr-double"></div>

						<div class="clearfix">
							<!-- #section:custom/extra.grid -->
							<div class="grid3">
								<span class="grey">
									<i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
									&nbsp; likes
								</span>
								<h4 class="bigger pull-right">1,255</h4>
							</div>

							<div class="grid3">
								<span class="grey">
									<i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
									&nbsp; tweets
								</span>
								<h4 class="bigger pull-right">941</h4>
							</div>

							<div class="grid3">
								<span class="grey">
									<i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
									&nbsp; pins
								</span>
								<h4 class="bigger pull-right">1,050</h4>
							</div>

							<!-- /section:custom/extra.grid -->
						</div>
					</div><!-- /.widget-main -->
				</div><!-- /.widget-body -->
			</div><!-- /.widget-box -->
		</div><!-- /.col -->
	</div><!-- /.row -->

@endsection

