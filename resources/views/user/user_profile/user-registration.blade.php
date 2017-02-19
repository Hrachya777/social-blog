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
				<div class="reg_place">
                    @include('message')
					<div class="login_title">
						<span>Sing up</span>
					</div>
                    {!! Form::open(['action' => ['UsersController@postRegistration'],'class' => 'login-form' ]) !!}

                        {!! Form::text('firstname',null, ['class' => 'user_login','placeholder' => 'Firstname']) !!}
                        {!! Form::text('lastname',null, ['class' => 'user_login','placeholder' => 'Lastname']) !!}
                        {!! Form::text('email',null, ['class' => 'user_login','placeholder' => 'Email']) !!}
                        {!! Form::password('password',['class' => 'user_login','placeholder' => 'Password']) !!}
                        {!! Form::password('password_confirmation', ['class' => 'user_login','placeholder' => 'Repeat Password']) !!}

						<a href="{{action('UsersController@getLogin')}}" class="back_to_login">
							login
						</a>

						<input type="submit" class="reg_btn" value="submit" />
                    {!! Form::close() !!}
				</div>
			</div>
		</div>
	</body>
</html>