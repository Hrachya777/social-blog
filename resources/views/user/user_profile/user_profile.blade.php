@extends('app-user')
@section('user-content')


		<div class="user_content">
			@include('message')
			<div class="user_info_place">
				<div class="user_info_left">
					<div class="user_img_place">
						<div class="user_img_place_child">
							@if(!Auth::User()->profile_picture)
							<img src="/assets/user/images/user.jpg" class="user_img" />
							@else
								<img src="/assets/user/user_profile_avatar/{{Auth::User()->profile_picture}}" class="user_img" />

							@endif
							<div class="user_img_abs"></div>
						</div>
					</div>
					<div class="username_place">
						<div class="username_center">
							<span class="user_status"></span>
							<span class="username">
								{{Auth::User()->firstname}}
							</span>
						</div>
						<div class="username_abs1"></div>
						<div class="username_abs2"></div>
					</div>
					{{--<div class="user_sms_place">--}}
						{{--<p class="send_sms">--}}
							{{--<i class="fa fa-envelope" aria-hidden="true"></i>--}}
							{{--<span class="send_sms_text">--}}
								{{--Отправить письмо--}}
							{{--</span>--}}
						{{--</p>--}}
					{{--</div>--}}
				</div>
				<div class="settings_place">
					<div>
						<div class="tabbable">
							<ul class="nav nav-tabs padding-18 tab-size-bigger" id="myTab">
								<li class="active">
									<a data-toggle="tab" href="#faq-tab-1">
										Profile
									</a>
								</li>
								<li>
									<a data-toggle="tab" href="#faq-tab-2">
										Settings
									</a>
								</li>
							</ul>
							<div class="tab-content no-border padding-24">
								<div id="faq-tab-1" class="tab-pane new_tab fade in active">
									<div class="user_info_right">
										<div class="right_info_left">
											<p>Firname</p>
											<p>lastname</p>
											<p>Email</p>
										</div>
										<div class="right_info_right">
											<p>{{Auth::User()->firstname}}</p>
											<p>{{Auth::User()->lastname}}</p>
											<p>{{Auth::User()->email}}</p>
										</div>
									</div>
								</div>
								<div id="faq-tab-2" class="tab-pane new_tab fade">
									<div class="container">
									    <div class="panel-group new_group" id="accordion">
									    <div class="panel panel-default new_panel1">
									      <div class="panel-heading new_head nH">
									        <h4 class="panel-title">
									          <a data-toggle="collapse" data-parent="#accordion" href="#collapse99" class="a">Personal info</a>
									        </h4>
									      </div>
									      <div id="collapse99" class="panel-collapse new_collapse collapse in">
									        <div class="panel-body new_body">
												{!! Form::open(['action' => ['UsersController@postChangeUserProfile'] ]) !!}
													{!! Form::text('firstname',Auth::User()->firstname, ['placeholder' => 'Change Firstname"', 'class' => 'form-control', 'id'=>'change' ]) !!}
													{!! Form::text('lastname',Auth::User()->lastname, ['placeholder' => 'Change Lastname"', 'class' => 'form-control', 'id'=>'change' ]) !!}
													{!! Form::text('email',Auth::User()->email, ['placeholder' => 'Change Email', 'class' => 'form-control', 'id'=>'change' ]) !!}
													<input type="submit" value="submit" id="change_submit" />
												{!!Form::close()!!}
									        </div>
									      </div>
									    </div>
									    <div class="panel panel-default new_panel1">
									      <div class="panel-heading new_head">
									        <h4 class="panel-title">
									          <a data-toggle="collapse" data-parent="#accordion" href="#collapse88" class="a">Change Avatar</a>
									        </h4>
									      </div>
									      <div id="collapse88" class="panel-collapse new_collapse collapse">
									        <div class="panel-body new_body" style="width: 180px;">
									        	<form action="" method="post">
									        		<div class="new_image_place">
														<input style="display:none" type="file" class="user_avatar_inp" content="{{ csrf_token() }}">

														@if(!Auth::User()->profile_picture)
															<img src="/assets/user/images/user.jpg" class="change_user_avatar" />
														@else
															<img src="/assets/user/user_profile_avatar/{{Auth::User()->profile_picture}}" class="change_user_avatar" />
														@endif
									        		</div>
									        		{{--<p class="choose_image">choose image</p>--}}
									        		<input type="submit" value="submit" id="change_submit" />
									        	</form>
									        </div>
									      </div>
									    </div>

									    <div class="panel panel-default new_panel1">
									      <div class="panel-heading new_head">
									        <h4 class="panel-title">
									          <a data-toggle="collapse" data-parent="#accordion" href="#collapse77" class="a">Change Password</a>
									        </h4>
									      </div>

									      <div id="collapse77" class="panel-collapse new_collapse collapse">
									        <div class="panel-body new_body">
												{!! Form::open(['action' => ['UsersController@postChangePassowrd'] ]) !!}
													{!! Form::password('old_password',['placeholder' => 'ваш текущий пароль', 'class' => 'form-control', 'id'=>'change' ]) !!}
													{!! Form::password('new_password',['placeholder' => 'новый пароль', 'class' => 'form-control', 'id'=>'change' ]) !!}
													{!! Form::password('password_confirmation',['placeholder' => 'повторите пароль', 'class' => 'form-control', 'id'=>'change' ]) !!}
													<input type="submit" value="submit" id="change_submit" />
												{!!Form::close()!!}
									        </div>
									      </div>
									    </div>
									    </div> 
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="us_place">
	        <div class="us_abs">
	            <div class="us_rel">
	                <div class="us_abs_1"></div>
	            </div>
	        </div>
	        <div class="us_place_center">

	            <div class="us_title_place">
	                <span class="us_title">Контакт с нами</span>
	            </div>

	            @include('message')

	            {!! Form::open(['action' => ['UsersController@postSubscripe'], ]) !!}

	                {!! Form::text('email',null, ['placeholder' => 'Эл.адрес', 'class' => 'e-mail form-control','id' => 'question_email']) !!}
	                <br>
	                {!! Form::textarea('question',null, ['placeholder' => 'пишите свой вопрос', 'class' => 'e-mail']) !!}
	                <br>
	                <input type="submit" value="Отправить" class="question_send" />
	                {!! Form::close() !!}
	        </div>
	        <div class="us_abs">
	            <div class="us_rel">
	                <div class="us_abs_2"></div>
	            </div>
	        </div>
	    </div>

@endsection