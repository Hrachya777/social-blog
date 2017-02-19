@extends('app-admin')
@section('admin-content')

@include('message')
<h1>Add Youtube Video</h1>
	{!! Form::open(['action' => ['AdminController@postAddYoutbeVideo'],'class' => 'login-form','files' =>true  ]) !!}
		<div class="col-md-4" style="margin-bottom:12px">
			<div class="col-md-6">
				{!! Form::text('width', null, ['class' => 'form-control','placeholder' => 'Youtube video width']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::text('height', null, ['class' => 'form-control','placeholder' => 'Youtube video Height']) !!}
			</div>
		</div>
		{!! Form::text('video', null, ['class' => 'form-control','placeholder' => 'Youtube Url']) !!}
		<button style="float:right;margin-top:12px;" class="btn btn-info" type="submit">Add</button>
	{!! Form::close() !!}


@if(count($vidoes) == 0)
	<h1>Not Video</h1>
@else

<h1>Video List</h1>
<div class="row">
	<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
		<div class="row">
			<div class="col-xs-12">
				<table id="simple-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">
								<label class="pos-rel">
									<input type="checkbox" class="ace" />
									<span class="lbl"></span>
								</label>
							</th>
							<th>video</th>
							<th class="hidden-480">Edit/delete</th>
						</tr>
					</thead>

					<tbody>
						@foreach($vidoes as $video)
							<tr>
								<td class="center">
									<label class="pos-rel">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>

								<td>
									<iframe width="{{$video->width}}" height="{{$video->height}}" src="{{$video->video}}" frameborder="0" allowfullscreen></iframe>								
									<!-- <a href="{{$video->video}}">{{$video->video}}</a> -->
								</td>

								<td>
									<div class="hidden-sm hidden-xs btn-group">

										<button class="btn btn-xs btn-success">
											<i class="ace-icon fa fa-check bigger-120"></i>
										</button>
										<a href="{{action('AdminController@getEditYoutubeVideo',$video->id)}}">
											<button style="width: 27px; height: 26px;" class="btn btn-xs btn-info">
												<i class="ace-icon fa fa-pencil bigger-120"></i>
											</button>
										</a>
										<button data-href="{{action('AdminController@getDeleteYoutube',$video->id)}}" class="btn btn-xs btn-danger click_del" data-toggle="modal" data-target="#myModal" >
											<i class="ace-icon fa fa-trash-o bigger-120"></i>
										</button>

									</div>
								</td>
							</tr>
						@endforeach  
					</tbody>
				</table>
			</div><!-- /.span -->
		</div><!-- /.row -->
	</div>						
</div>						


{{ $vidoes->links() }}
@endif

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Do you want delete this article</h4>
        </div>
        
        <div class="modal-footer">
        	<a class="del_yes" href="">
        		<button  class="btn btn-danger delete_modal">Yes</button>
        	</a>
        	<button type="button" class="btn btn-success" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>
</div>	
@endsection

@section('script')
	{!! HTML::script( asset('assets/admin/js/delete.js') ) !!} 
@endsection
