<p> Enter your details to begin: </p>

		            						{!! Form::open(['action' => ['UsersController@postRegistration'],'files' => 'true','class' => 'login-form', 'id' => 'registration_form', 'role' => 'form' ]) !!}
											
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
														<!-- 	<input name="email" type="email" class="form-control reg_email" placeholder="Email" /> -->
		        											{!! Form::text('email',null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}

															<i class="ace-icon fa fa-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input name="username" type="text" class="form-control reg_username" placeholder="Username" /> -->
		        											{!! Form::text('username',null, ['placeholder' => 'Username', 'class' => 'form-control']) !!}

															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input name="password" type="password" class="form-control reg_password" placeholder="Password" /> -->
		        											{!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}

															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<!-- <input type="password" class="form-control reg_repeat_password" placeholder="Repeat password" /> -->
		        											{!! Form::password('password_confirmation', ['placeholder' => 'Password Confirmation', 'class' => 'form-control']) !!}

															<i class="ace-icon fa fa-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace" />
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button type="reset" class="width-30 pull-left btn btn-sm">
															<i class="ace-icon fa fa-refresh"></i>
															<span class="bigger-110">Reset</span>
														</button>

														<button content="{{ csrf_token() }}" type="submit" class="width-65 pull-right btn btn-sm btn-success ">
															<span class="bigger-110">Register</span>

															<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											{!! Form::close() !!}