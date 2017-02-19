<html>
	<head>
		{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
		{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
		{!! HTML::style( asset('assets/user/css/login_reg.css')) !!}
	</head>
	<body>
	    <div class="login_content">
			<div class="logo_place_abs">
				<a href="{{action('UsersController@getHome')}}" class="back_logo_link">
					<img src="/assets/user/images/logo.png" class="back_logo_img" />
				</a>
			</div>
			<div class="login_reg_place">
				<div class="login_place">
					@include('message')
					<div class="login_title">
						<span>Welcome.</span> Please login.
					</div>
					{!! Form::open(['action' => ['UsersController@postLogin'],'class' => 'login-form' ]) !!}
						{!! Form::text('email',null, ['class' => 'user_login','placeholder' => 'Email']) !!}
						{!! Form::password('password',['class' => 'user_login','placeholder' => 'Password']) !!}
						<div class="login_btn_place">
							<input type="submit" class="login_btn" value="login" />
						</div>
						<div class="error_login"></div>
						<div>
							<label class="login_remember">
								<input type="checkbox" name="remember" class="checkbox" />
								<span class="remember">remember</span>
							</label>
							<a href="#" class="forgot">Forgot Password?</a>
						</div>
					{!! Form::close() !!}
					<div class="soc_login_place">
						<div class="login_child_left">
							<span class="soc_login_text">Or login with</span>
						</div>
						<div class="login_child_right">
							<a href="{{action('UsersController@getFacebookLogin')}}" class="soc_links">
								<i class="fa fa-facebook-square" aria-hidden="true"></i>
							</a>
							<a href="{{action('UsersController@getGoogleLogin')}}" class="soc_links">
								<i class="fa fa-google-plus-square" aria-hidden="true"></i>
							</a>
							<a href="{{action('UsersController@getTwitterLogin')}}" class="soc_links">
								<i class="fa fa-twitter-square" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="sing_up_create_btn_place">
						<a href="{{action('UsersController@getRegistration')}}" class="create_btn_text">Create an account</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>