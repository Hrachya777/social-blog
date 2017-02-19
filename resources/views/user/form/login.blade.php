{!! Form::open(['action' => ['UsersController@postLogin'],'class' => 'login-form', 'role' => 'form' ]) !!}
											
	<fieldset>
		<label class="block clearfix">
			<span class="block input-icon input-icon-right">
		        {!! Form::text('email',null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
<!-- 				<input type="text" class="form-control" placeholder="Email" /> -->
				<i class="ace-icon fa fa-user"></i>
			</span>
		</label>

		<label class="block clearfix">
			<span class="block input-icon input-icon-right">
		        {!! Form::text('password',null, ['placeholder' => 'password', 'class' => 'form-control']) !!}

				<!-- <input type="password" class="form-control" placeholder="Password" /> -->
				<i class="ace-icon fa fa-lock"></i>
			</span>
		</label>

		<div class="space"></div>

		<div class="clearfix">
			<label class="inline">
				<input type="checkbox" class="ace" />
				<span class="lbl"> Remember Me</span>
			</label>

			<button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
				<i class="ace-icon fa fa-key"></i>
				<span class="bigger-110">Login</span>
			</button>
		</div>

		<div class="space-4"></div>
	</fieldset>
{!! Form::close() !!}