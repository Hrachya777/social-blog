<!DOCTYPE html>
<html>
<head>
	<title>DDay Admin</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-fonts.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-rtl.css')) !!}

</head>
<body class="login-layout">
	<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">Think Day</span>
									<span class="white" id="id-text2"></span>
								</h1>
								<h4 class="blue" id="id-company-text">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>
									
											@include('message')
										
		            						{!! Form::open(['action' => ['AdminController@postLogin'],'files' => 'true','class' => 'login-form', 'role' => 'form' ]) !!}
													
														<fieldset>
															<label class="block clearfix">
																<span class="block input-icon input-icon-right">


		        													{!! Form::text('email',null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}

																	<i class="ace-icon fa fa-user"></i>
																</span>
															</label>

															<label class="block clearfix">
																<span class="block input-icon input-icon-right">


																	{!! Form::password('password',  ['placeholder' => 'Password', 'class' => 'form-control']) !!}

																	<i class="ace-icon fa fa-lock"></i>
																</span>
															</label>

															<div class="space"></div>

															<div class="clearfix">
																<label class="inline">
																	{{--{!! Form::checkbox('remember_me', ['class' => 'ace']) !!}--}}


																	<input name="remember_me" type="checkbox" class="ace" />
																	<span class="lbl"> Remember Me</span>
																</label>

																<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
																	<i class="ace-icon fa fa-key"></i>
																	<span class="bigger-110">Login</span>
																</button>
															</div>

															<div class="space-4"></div>
														</fieldset>
		            						{!!Form::close()!!}
											

										

											
										</div><!-- /.widget-main -->

										
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								

								
							</div><!-- /.position-relative -->

							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

	{!! HTML::script( asset('assets/admin/plugins/js/jquery.js') ) !!} 
	{!! HTML::script( asset('assets/admin/plugins/js/jquery.mobile.custom.js') ) !!} 

		
	<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
</body>
</html>