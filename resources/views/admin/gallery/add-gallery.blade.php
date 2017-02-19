@extends('app-admin')
@section('admin-content')
<style type="text/css">
	.add_gallery{
		display: block;
	    width: 235px;
	    margin: 0 auto;
	    cursor: pointer;
	}
	.add_gallery:hover{
		opacity: 0.7;
	}
	.gallery_icon{
		font-size: 86px;
	}
	.gallery_file{
		display: none!important;
	}
	.add_gal_button{
		margin-top:15px;

	}
</style>

	<h1>Add Gallery Images</h1>

	@include('message')
	{!! Form::open(['action' => ['AdminController@postAddGallery'] ,'class' => 'form-horizontal','files' =>true  ]) !!}

     	{!! Form::file('image_name[]', array('multiple'=>true,'class'=>'gallery_file')) !!}

		<span class="add_gallery">
			<span class="bigger-150 bolder"><i class="ace-icon fa fa-caret-right red"></i> Drop files</span> to upload
			<span class="smaller-80 grey">(or click)</span> <br>
			<i class="upload-icon ace-icon fa fa-cloud-upload blue fa-3x article_file_icon gallery_icon"></i>
		</span>


  		<button type="submit" class="btn btn-warning add_gal_button">
			<span class="glyphicon glyphicon-ok-sign"></span>Add
        </button>

	{!! Form::close() !!}





@endsection

