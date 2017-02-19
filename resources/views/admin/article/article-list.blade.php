@extends('app-admin')
@section('admin-content')

	{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-fonts.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace.css')) !!}

@if(count($articles) == 0)
	<h1>Not articles</h1>
@else

<h1>Article List</h1>
<div class="row">
	<div class="col-xs-12">
		@include('message')

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
							<th>Title</th>
							<th>desctiption</th>
							<th class="hidden-480">image</th>
							<th class="hidden-480">Edit/delete</th>
						</tr>
					</thead>

					<tbody>
						@foreach($articles as $article)
							<tr>
								<td class="center">
									<label class="pos-rel">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>

								<td>
									<a href="#">{{$article->title}}</a>
								</td>
								<td>{{substr($article->description,1,3)}}</td>
								<td>
									<img style="width:41px;height:28px" src="/assets/admin/images/article_uploade/{{$article->image}}">
								</td>
								<td>
									<div class="hidden-sm hidden-xs btn-group">
										<button class="btn btn-xs btn-success">
											<i class="ace-icon fa fa-check bigger-120"></i>
										</button>
										<a href="{{action('AdminController@getEditArticle',$article->id)}}">
											<button style="width: 27px; height: 26px;" class="btn btn-xs btn-info">
												<i class="ace-icon fa fa-pencil bigger-120"></i>
											</button>
										</a>
										<button data-href="{{action('AdminController@getDeleteArticle',$article->id)}}" class="btn btn-xs btn-danger click_del" data-toggle="modal" data-target="#myModal">
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


{{ $articles->links() }}
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
