@extends('app-admin')
@section('admin-content')
	<style type="text/css">
		.edit_file_article{
		    cursor: pointer;
		    width: 250px;
		    margin: 0 auto;
		    display: block;
		    cursor:pointer;
		}
		.article_file_icon{
			font-size: 90px;
		}
		.edit_article_button{
			float: right;
		}
	</style>
	<h1>Edit article</h1>

	{!! Form::model($articles,['action' => ['AdminController@postUpdateArticle'] ,'files' =>true ] ) !!}

		{!! Form::text('title', null, ['class' => 'form-control','style'=>'margin-bottom:12px']) !!}
		{!! Form::textarea('description', null, ['class' => 'form-control','style'=>'margin-bottom:12px']) !!}

		<input name="id" type="hidden" value='{{$articles->id}}'>
		<input type="file" class="edit_file_article_image" name="image" style="display:none">
		<span class="edit_file_article">
			<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload
			<span class="smaller-80 grey">(or click)</span> <br> 				
			<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x article_file_icon"></i>
		</span>

		<button type="submit" class="btn btn-info edit_article_button">Edit</button>

	{!! Form::close() !!}

@endsection

