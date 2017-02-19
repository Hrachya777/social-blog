@extends('app-admin')

  @section('script')
 



  {!! HTML::script( asset('assets/admin/plugins/js/markdown.js') ) !!} 
  {!! HTML::script( asset('assets/admin/plugins/js/bootstrap-markdown.js') ) !!}
  {!! HTML::script( asset('assets/admin/plugins/js/jquery.hotkeys.js') ) !!}
  {!! HTML::script( asset('assets/admin/plugins/js/bootstrap-wysiwyg.js') ) !!}
  {!! HTML::script( asset('assets/admin/plugins/js/bootbox.js') ) !!}

  

  {!! HTML::script( asset('assets/admin/plugins/js/ace/elements.wysiwyg.js') ) !!} 
  {!! HTML::script( asset('assets/admin/plugins/js/ace/elements.colorpicker.js') ) !!}
  {!! HTML::script( asset('assets/admin/plugins/js/plugins-main.js') ) !!}


  


  @endsection

@section('admin-content')

	{!! HTML::style( asset('assets/admin/plugins/css/bootstrap.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/font-awesome.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace-fonts.css')) !!}
	{!! HTML::style( asset('assets/admin/plugins/css/ace.css')) !!}

	{!! HTML::style( asset('assets/admin/plugins/crop/css/main.css')) !!}
	



	<div class="ace-settings-container" id="ace-settings-container">
							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<!-- #section:settings.skins -->
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<!-- /section:settings.skins -->

									<!-- #section:settings.navbar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<!-- /section:settings.navbar -->

									<!-- #section:settings.sidebar -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<!-- /section:settings.sidebar -->

									<!-- #section:settings.breadcrumbs -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<!-- /section:settings.breadcrumbs -->

									<!-- #section:settings.rtl -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<!-- /section:settings.rtl -->

									<!-- #section:settings.container -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>

									<!-- /section:settings.container -->
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<!-- #section:basics/sidebar.options -->
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>

									<!-- /section:basics/sidebar.options -->
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<h4 class="header green clearfix">
									DDAY Lightweight Editor
									<span class="block pull-right">
										<small class="grey middle">Choose style: &nbsp;</small>

										<span class="btn-toolbar inline middle no-margin">
											<span data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow">
													1
													<input type="radio" value="1" />
												</label>

												<label class="btn btn-sm btn-yellow active">
													2
													<input type="radio" value="2" />
												</label>

												<label class="btn btn-sm btn-yellow">
													3
													<input type="radio" value="3" />
												</label>

												<label class="btn btn-sm btn-yellow">
													4
													<input type="radio" value="4" />
												</label>
											</span>
										</span>
									</span>
								</h4>
								@include('message')
								{!! Form::open(['action' => ['AdminController@postAddArticle'],'files' => 'true','class' => 'login-form','files' =>true  ]) !!}
									<b style="color:#6AAEDF;display:block;margin-top:15px;">Title</b>
									{!! Form::text('title', null, ['placeholder' => 'Title' , 'class' => 'form-control']) !!}

									<input alt="{{ csrf_token() }}" type="file" class="article_image" name="image" style="display:none">

									<b style="color:#6AAEDF;display:block;margin-top:15px;">Description</b>
									<div class="wysiwyg-editor" id="editor1"></div>
									<textarea style="display:none" class="editor_article" name="description" ></textarea>

										<div class="btn-group pull-right">
										<button type="submit" class="btn btn-sm btn-danger btn-white btn-round save_article">
											<i class="ace-icon fa fa-floppy-o bigger-125"></i>
											Save
										</button>
									</div>
								{!! Form::close() !!}
								<div class="hr hr-double dotted"></div>

							

							
								
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->





<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
         <img style="width:100%" src="" class="article_images_js"> 
       {{--  <div class="img-container">
          <img id="image" class="article_images_js" src="" alt="Picture">
        </div> --}}
      </div>
      <div class="modal-footer">
        	<button type="button" class="btn btn-primary save_images_article">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Jumbotron -->




@endsection

