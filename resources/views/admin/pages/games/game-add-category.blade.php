@extends('app-admin')
@section('admin-content')
    <div class="panel with-nav-tabs panel-default">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li  class="active"><a class="gallery_list" href="#add_game_category" data-toggle="tab">Add Game Category</a></li>
                <li><a class="gallery_list" href="#add_game_category_list" data-toggle="tab">Game Category List</a></li>
            </ul>
        </div>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="add_game_category">
                @include('message')
                {!! Form::open(['action' => ['AdminController@postAddGameCategory'],'files' => 'true','class' => 'login-form','files' =>true  ]) !!}
                <b style="color:#6AAEDF;display:block;margin-top:15px;">Title</b>
                {!! Form::text('title', null, ['placeholder' => 'Title' , 'class' => 'form-control','maxlength' => "15"]) !!}

                <b style="color:#6AAEDF;display:block;margin-top:15px;">Add Category Image </b>
                <input type="file" name="image">

                <input type="hidden" name="game_page_id" value="{{$game_page_id}}">

                <b style="color:#6AAEDF;display:block;margin-top:15px;">Add Catehory Game</b>

                <input type="file" name="game">

                <div class="btn-group pull-right">
                    <button type="submit" class="btn btn-sm btn-danger btn-white btn-round save_article">
                        <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                        Save
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
            <div class="tab-pane fade" id="add_game_category_list">
                @if(count($page_cateory_games) != 0)
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <table id="simple-table" class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>
                                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                            created at
                                        </th>
                                        <th>Image</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($page_cateory_games as $page_cateory_game)
                                        <tr>
                                            <td>
                                                 {{$page_cateory_game->title}}
                                            </td>

                                            <td>{{date('d/m/Y', strtotime($page_cateory_game->created_at))}}</td>
                                            <td>
                                                <img style="width: 80px;" src="/page_uploade/game/category_images/{{$page_cateory_game->image}}" >
                                            </td>
                                            <td>
                                                <div class="hidden-sm hidden-xs btn-group">
                                                    <button data-href="{{action('AdminController@getDeleteGameCategory',$page_cateory_game->id)}}"  data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-danger click_del">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else
                    Not Category
                @endif
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Do you want delete this game name</h4>
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
@endsection

@section('script')
    {!! HTML::script( asset('assets/admin/js/delete.js') ) !!}
@endsection