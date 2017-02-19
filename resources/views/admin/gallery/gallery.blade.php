@extends('app-admin')

@section('admin-content')
	{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/colorbox.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-fonts.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace.css')) !!}

	{!! HTML::style( asset('assets/admin/plugins/css/ace.onpage-help.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/sunburst.css')) !!}


<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">


					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
						<!-- #section:settings.box -->

						<!-- /section:settings.box -->
						<div class="page-header">
							<h1>
								Gallery
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									@if(count($images) == 0)
										not gallery image
									@else
										responsive photo gallery using colorbox
									@endif

								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div>
									<ul class="ace-thumbnails clearfix">
										<!-- #section:pages/gallery -->
										@foreach($images as $image)

											<li>
												<a href="/assets/admin/images/gallery_uploade/{{$image->image_name}}" title="Photo Title" data-rel="colorbox">
													<img width="150" height="150" alt="150x150" src="/assets/admin/images/gallery_uploade/{{$image->image_name}}" />
												</a>

												<div class="tags">
													<span class="label-holder">
														<span class="label label-info">breakfast</span>
													</span>

													<span class="label-holder">
														<span class="label label-danger">fruits</span>
													</span>

													<span class="label-holder">
														<span class="label label-success">toast</span>
													</span>

													<span class="label-holder">
														<span class="label label-warning arrowed-in">diet</span>
													</span>
												</div>

												<div class="tools">
													<a href="#">
														<i data-id='{{$image->id}}' content="{{ csrf_token() }}" data-toggle="modal" data-target="#myModal1" class="ace-icon fa fa-link resize_icon"></i>
													</a>

													<a href="{{action('AdminController@getCropImage',$image->id)}}">
														<i class="ace-icon fa fa-paperclip"></i>
													</a>

													<a href="#">
														<i data-toggle="modal" data-target="#myModal" data-id='{{$image->id}}' class="ace-icon fa fa-pencil galery_edit"></i>
													</a>
													<a  href="#">
														<i data-id='{{$image->id}}' class="ace-icon fa fa-times red galery_delete"></i>
													</a>
												</div>
											</li>

										@endforeach

									</ul>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">

			      <!-- Modal content-->
			      <div class="modal-content">

			        <div class="modal-body">
			        	<input content="{{ csrf_token() }}" type="file" style="display:none" class="gallery_image_modal_edit">
			            <img style="width:100%;cursor:pointer" src="" class="gallery_image_modal">
			            <img class="img_loading" style="display: none;position: absolute;top: 41%;left: 41%;" src="/assets/admin/images/ajax-loader.gif">
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
			        </div>
			      </div>

			    </div>
 			</div>

 			<div class="modal fade" id="myModal1" role="dialog">
			    <div class="modal-dialog">

			      <!-- Modal content-->
			      <div class="modal-content">

			        <div class="modal-body">
			        	<h1>Resize your image</h1>
			        	<img class="img_loading1" style="display: none;position: absolute;top: 41%;left: 41%;" src="/assets/admin/images/ajax-loader.gif">
			        	<input style="margin-bottom:12px;" type="number" class="form-control gal_image_width" placeholder="width">
			        	<input type="number" class="form-control gal_image_height" placeholder="height">
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default resize_image" >Save</button>
			        </div>
			      </div>

			    </div>
 			</div>
@endsection


@section('script')

<script type="text/javascript">
	jQuery(function($) {
		var $overflow = '';
		var colorbox_params = {
			rel: 'colorbox',
			reposition:true,
			scalePhotos:true,
			scrolling:false,
			previous:'<i class="ace-icon fa fa-arrow-left"></i>',
			next:'<i class="ace-icon fa fa-arrow-right"></i>',
			close:'&times;',
			current:'{current} of {total}',
			maxWidth:'100%',
			maxHeight:'100%',
			onOpen:function(){
				$overflow = document.body.style.overflow;
				document.body.style.overflow = 'hidden';
			},
			onClosed:function(){
				document.body.style.overflow = $overflow;
			},
			onComplete:function(){
				$.colorbox.resize();
			}
		};

		$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
		$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon


		$(document).one('ajaxloadstart.page', function(e) {
			$('#colorbox, #cboxOverlay').remove();
	    });
	})


</script>
@endsection

@section('script')


	{!! HTML::script( asset('assets/admin/plugins/js/ace/elements.onpage-help.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/ace/ace.onpage-help.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/rainbow.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/language/generic.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/language/html.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/language/css.js') ) !!}
	{!! HTML::script( asset('assets/admin/plugins/js/language/javascript.js') ) !!}

@endsection
