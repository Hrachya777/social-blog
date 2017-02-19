@extends('app-admin')
@section('admin-content')
    <h1>Edit Sport</h1>
    {!! Form::model($sports,['action' => ['AdminController@postEditSport'] ,'files' =>true ] ) !!}
        {!! Form::text('title', null, ['class' => 'form-control','style'=>'margin-bottom:12px']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control','style'=>'margin-bottom:12px']) !!}
        @if($sports->image)
            <img style="width:100px" src="/page_uploade/sport/{{$sports->image}}">
        @else
            <img src="/assets/admin/plugins/avatars/avatar.png">
        @endif
        <input type="hidden" name="id" value="{{$sports->id}}">
        <input type="file" name="image">
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary save_images_article">Save changes</button>
        </div>
    {!! Form::close() !!}
@endsection
