@extends('app-admin')
@section('admin-content')

<h1>Edit Video Youtube</h1>
<div class="col-md-12">
	<div class="col-md-6">
		<iframe id="you" class="edit_youtube" width="500" height="300" src="{{$videos->video}}" frameborder="0" allowfullscreen></iframe>								
	</div>
	<input type="hidden" value="{{$videos->id}}" class="video_url">
	<div class="col-md-6">

		{!! Form::open(['action' => ['AdminController@postAutoplay'] ,'class' => 'form-horizontal']) !!}
			<input name="video_id" type="hidden" value="{{$videos->id}}" >
			<span class="col-md-12" style="margin-top:12px">
				<label class="pull-right inline">
					<small class="muted smaller-90">Width:</small>
					<input name='width' value='{{$videos->width}}' style="width: 63px" id="id-button-borders" type="text" class="ace ace-switch ace-switch-5">
					<span class="lbl middle"></span>
				</label>
			</span>
			<span class="col-md-12" style="margin-top:12px">
				<label class="pull-right inline">
					<small class="muted smaller-90">Height:</small>
					
					<input name='height' value='{{$videos->height}}' style="width: 63px"  id="id-button-borders" type="text" class="ace ace-switch ace-switch-5">

					<span class="lbl middle"></span>
				</label>
			</span>

			<span class="col-md-12" style="margin-top:12px">
				<label class="pull-right inline">
					<button style="width: 112px" type="submit" class="btn btn-white btn-success">save</button>
				</label>
			</span>
		{!! Form::close() !!} 

		<input type="hidden"  class="videos_id">		
		<span class="col-md-12" style="margin-top:12px">
			<label class="pull-right inline">
				<small class="muted smaller-90">Autoplay:</small>
				@if($videos->autoplay == '1')
					<input checked='checked' content="{{ csrf_token() }}" data-src='?autoplay=1' id="id-button-borders"  type="checkbox" class="ace ace-switch ace-switch-5 youtube_check youtube_autoplay">
				@else
					<input  content="{{ csrf_token() }}" data-src='?autoplay=1' id="id-button-borders"  type="checkbox" class="ace ace-switch ace-switch-5 youtube_check youtube_autoplay">
				@endif
				<span  class="lbl middle"></span>
			</label>
		</span>
		<span class="col-md-12" style="margin-top:12px">
			<label class="pull-right inline">
				<small class="muted smaller-90">Show info:</small>
				@if($videos->info == '1')
					<input  checked='checked' content="{{ csrf_token() }}" data-src='?&showinfo=0&' id="id-button-borders" type="checkbox" class="ace ace-switch ace-switch-5 youtube_check show_info">
				@else
					<input content="{{ csrf_token() }}" data-src='?&showinfo=0&' id="id-button-borders" type="checkbox" class="ace ace-switch ace-switch-5 youtube_check show_info">
				@endif
				<span class="lbl middle"></span>
			</label>
		</span>
		<span class="col-md-12" style="margin-top:12px">
			<label class="pull-right inline">
				<small class="muted smaller-90">Show panel:</small>
				@if($videos->panel == '1')
					<input checked='checked' content="{{ csrf_token() }}" data-src='?&controls=0&' id="id-button-borders" type="checkbox" class="ace ace-switch ace-switch-5 youtube_check show_panel">
				@else
					<input content="{{ csrf_token() }}" data-src='?&controls=0&' id="id-button-borders" type="checkbox" class="ace ace-switch ace-switch-5 youtube_check show_panel">
				@endif
				<span class="lbl middle"></span>
			</label>
		</span>
		<!-- <span class="col-md-12" style="margin-top:12px">
			<label class="pull-right inline">
				<small class="muted smaller-90">Border:</small>
				<input id="id-button-borders" type="checkbox" class="ace ace-switch ace-switch-5">
				<span class="lbl middle"></span>
			</label>
		</span> -->
		
	</div>
<!-- <iframe width="300" height="400" src="//www.youtube.com/embed/qUJYqhKZrwA?&showinfo=0&controls=0&" frameborder="0" allowfullscreen> -->




@endsection

@section('script')
	{!! HTML::script( asset('assets/user/js/user_main.js') ) !!} 
@endsection