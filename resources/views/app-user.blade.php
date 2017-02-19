<html>
<head>
	<title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-fonts.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-rtl.css')) !!}


	{!! HTML::style( asset('assets/user/css/font-face.css')) !!}
	{!! HTML::style( asset('assets/user/css/style.css')) !!}


</head>
<body>

<header>

	<input class="url" type="hidden" data-url="{{$url}}">
	<div class="header_center">
		<div class="center_left">
			<div class="header_left">
				<div class="logo_place">
					<a href="{{action('UsersController@getHome')}}">
						<img src="/images/logo.png" class="logo" />
					</a>
				</div>
				<div class="center_hide">
					@if(Auth::User() && Auth::User()->role == "user")
						<div class="login_place2">
							<div class="welcome_user">
								<span class="user_hello">{{Auth::User()->firstname}}</span>
								<img src="/assets/user/images/user.jpg" class="user_small_img" />
								<i class="fa fa-sort-desc" aria-hidden="true"></i>
								<div class="welcome_user_abs">
									<div class="user_abs_child">
										<i class="fa fa-caret-up" aria-hidden="true"></i>
										<a href="{{action('UsersController@getUserProfile')}}" style="font-style: italic;">My Page</a>
										<a href="{{action('UsersController@getLogOut')}}">Log Out</a>
									</div>
								</div>
							</div>
						</div>
					@else
						<div class="login_place">
							{{--<span class="login_btn" data-toggle="modal" data-target="#myModal">--}}

								{{--Логин / s--}}
							{{--</span>--}}
							
							<a href="{{action('UsersController@getLogin')}}" class="btn_a">
								<button class="new_login_btn">
									Логин
								</button>
							</a>
							<a href="{{action('UsersController@getRegistration')}}" class="btn_a">
								<button class="new_login_btn">
									Регистрация
								</button>
							</a>
						</div>
					@endif
				</div>
			</div>
		</div>
		<div class="center_right_top">
			@if(Auth::User() && Auth::User()->role == "user")
				<div class="login_place">
					<div class="welcome_user">
						<span class="user_hello">{{Auth::User()->firstname}}</span>
						<img src="/assets/user/images/user.jpg" class="user_small_img" />
						<i class="fa fa-sort-desc" aria-hidden="true"></i>
						<div class="welcome_user_abs">
							<div class="user_abs_child">
								<i class="fa fa-caret-up" aria-hidden="true"></i>
								<a href="{{action('UsersController@getUserProfile')}}" style="font-style: italic;">My Page</a>
								<a href="{{action('UsersController@getLogOut')}}">Log Out</a>
							</div>
						</div>
					</div>
				</div>
			@else
				<div class="login_place">
					{{--<span class="login_btn" data-toggle="modal" data-target="#myModal">--}}

						{{--Логин / s--}}
					{{--</span>--}}
					
					<a href="{{action('UsersController@getLogin')}}" class="btn_a">
						<button class="new_login_btn">
							Логин
						</button>
					</a>
					<a href="{{action('UsersController@getRegistration')}}" class="btn_a">
						<button class="new_login_btn">
							Регистрация
						</button>
					</a>
				</div>
			@endif

		</div>
		<div class="center_right">
			<div class="header_right"></div>
			<ul class="header_menu">
				<li class="menu_children">
					<a href="{{action('UsersController@getHome')}}" class="menu_link">
						<span class="link_border">
							Главный
							<span class="menu_abs"></span>
						</span>
					</a>
				</li>

				<li class="menu_children">
					<a href="{{action('UsersController@getNews')}}" class="menu_link">
						<span class="link_border">
							Новости
							<span class="menu_abs"></span>
						</span>
					</a>
				</li>
				<li class="menu_children">
					<a href="{{action('UsersController@getSport')}}" class="menu_link">
						<span class="link_border">
							Спорт
							<span class="menu_abs"></span>
						</span>
					</a>
				</li>
				<li class="menu_children">
					<a href="{{action('UsersController@getInteres')}}" class="menu_link">
						<span class="link_border">
							Интересно
							<span class="menu_abs"></span>
						</span>
					</a>
				</li>
				<li class="menu_children">
					<a href="{{action('UsersController@getGame')}}" class="menu_link">
						<span class="link_border">
							Игры
							<span class="menu_abs"></span>
						</span>
					</a>
				</li>
				<li id="contact" class="menu_children">
					<a class="menu_link">
						<span class="link_border">
							Контакт
							<span class="menu_abs"></span>
						</span>
					</a>
				</li>
				<li class="menu_children">
					<i class="fa fa-search" aria-hidden="true"></i>
					<i class="fa fa-times" aria-hidden="true"></i>
					{!! Form::open(['action' => ['UsersController@getSearch',],'method' => 'GET', 'id' => 'search_all']) !!}

						<input type="text" name="search" class="search search_all" placeholder="search" />

					{!!Form::close()!!}

				</li>
			</ul>
		</div>
	</div>
</header>


	<div>
		@yield('user-content')
	</div>


<footer>
	<div class="footer_center">
		<div class="footer_logo_place">
			<a href="index.html">
				<img src="/images/logo.png" class="logo" />
			</a>
		</div>
		<div class="footer_text_place">
			<p class="footer_text">
				&copy; 2017 All Rights Reserved.
			</p>
		</div>
		<div class="footer_social_place">
			<a href="#" class="social_link">
				<i class="fa fa-facebook" aria-hidden="true"></i>
			</a>
			<a href="#" class="social_link">
				<i class="fa fa-google-plus" aria-hidden="true"></i>
			</a>
			<a href="#" class="social_link">
				<i class="fa fa-twitter" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</footer>

<div class="back_to_top">
	<i class="fa fa-angle-up" aria-hidden="true"></i>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content modal_place">
			{{--<div class="modal-header modal_head">--}}
				{{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
				{{--<span class="modal-title login_title" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Логин</span>--}}
				{{--<span class="log_middle">/</span>--}}
				{{--<span class="modal-title login_title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Регистрация</span>--}}
			{{--</div>--}}
			{{--<div class="panel-group" id="accordion">--}}
				<div class="panel panel-default">
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							<input type="hidden" class="token" content="{{ csrf_token() }}">
							<input type="email" id="email" class=" login_email" placeholder="Эл.адрес" />
							<input type="password" id="pass" class="login_password" placeholder="Пароль" />
							<a  href="{{action('UsersController@getFacebookLogin')}}" class="user_soc_links">
								<i class="fa fa-facebook-square" aria-hidden="true"></i>
							</a>
							<a  href="{{action('UsersController@getGoogleLogin')}}" class="user_soc_links">
								<i class="fa fa-google-plus-square" aria-hidden="true"></i>
							</a>
							<a href="{{action('UsersController@getTwitterLogin')}}" class="user_soc_links">
								<i class="fa fa-twitter-square" aria-hidden="true"></i>
							</a>
							<input type="submit" class="log_btn login_submit" value="Логин">
						</div>
					</div>
				</div>
				{{--<div class="panel panel-default">--}}
					{{--<div id="collapse2" class="panel-collapse collapse">--}}
						{{--<div class="panel-body">--}}

							{{--<input type="text" class="reg_name" placeholder="Имя" />--}}
							{{--<input type="text" class="reg_surname" placeholder="Фамиля" />--}}
							{{--<input type="email" class="reg_email" placeholder="Эл.адрес" />--}}
							{{--<input type="password" class="reg_pass" placeholder="Пароль" />--}}
							{{--<input type="password" class="reg_rebeatpass" placeholder="Пов-пароль" />--}}
							{{--<input type="button" class="reg_btn reg_submit" value="Регистрация">--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		</div>
	</div>
</div>
<!-- End Modal -->

	{!! HTML::script( asset('assets/user/js/jquery.js') ) !!}
	{!! HTML::script( asset('assets/user/js/bootstrap.min.js') ) !!}
	{!! HTML::script(asset('assets/user/js/show_more.js') ) !!}
    {!! HTML::script( asset('assets/user/js/registation_login.js') ) !!}

	{!! HTML::script( asset('assets/user/js/init.js') ) !!}
	{!! HTML::script( asset('assets/user/js/user_main.js') ) !!}
	{!! HTML::script( asset('assets/user/js/main.js') ) !!}



	@yield('script')
</body>
</html>