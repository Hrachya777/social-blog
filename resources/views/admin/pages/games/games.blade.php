@extends('app-admin')
@section('admin-content')
    @include('message')
    {!! Form::open(['action' => ['AdminController@postAddGameName'],'files' => 'true','class' => 'login-form','files' =>true  ]) !!}
    <b style="color:#6AAEDF;display:block;margin-top:15px;">Add Game Name</b>

    <b>Add Name</b>
    {!! Form::text('name', null, ['placeholder' => 'Game Name' , 'class' => 'form-control','maxlength' => "23"]) !!}

    <b>Add Images</b>
    {!! Form::file('image', null, ['placeholder' => 'Game Name' , 'class' => 'form-control']) !!}

    <div class="btn-group pull-right">
        <button type="submit" class="btn btn-sm btn-danger btn-white btn-round save_article">
            <i class="ace-icon fa fa-floppy-o bigger-125"></i>
            Save
        </button>
    </div>
    {!! Form::close() !!}

@endsection