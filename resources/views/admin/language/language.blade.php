@extends('app-admin')
@section('admin-content')
	<h1>Add Language</h1>
	@include('message')
	{!! Form::open(['action' => ['AdminController@postAddLanguage'],'class' => 'login-form','files' =>true  ]) !!}

	{!! Form::text('lang_name', null, ['class' => 'form-control','placeholder' => 'Language Name', 'maxlength' => '2']) !!}

	<button style="margin-top:15px" class="btn btn-info" type="submit">Save</button>
	{!! Form::close() !!}
@endsection