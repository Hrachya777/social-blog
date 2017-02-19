@extends('app-admin')
@section('admin-content')
    <h1>Edit News</h1>
    {!! Form::model($news,['action' => ['AdminController@postEditNews'] ,'files' =>true ] ) !!}
        {!! Form::text('title', null, ['class' => 'form-control','style'=>'margin-bottom:12px']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control','style'=>'margin-bottom:12px']) !!}
        @if($news->image)
            <img style="width:100px" src="/page_uploade/news/{{$news->image}}">
        @else
            <img src="/assets/admin/plugins/avatars/avatar.png">
        @endif
        <input type="hidden" name="id" value="{{$news->id}}">
        <input type="file" name="image">
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary save_images_article">Save changes</button>
        </div>
    {!! Form::close() !!}
@endsection
