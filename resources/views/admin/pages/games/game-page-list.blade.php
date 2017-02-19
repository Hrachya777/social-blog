@extends('app-admin')
@section('admin-content')
    @include('message')
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                            created at
                        </th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($game_names as $game_name)
                        <tr>
                            <td>
                                <a href="{{action('AdminController@getAddGameCagegoty',$game_name->id)}}"> {{$game_name->name}}</a>
                            </td>

                            <td>{{date('d/m/Y', strtotime($game_name->created_at))}}</td>
                            <td>
                                <img style="width: 80px;" src="/page_uploade/game/game_page_images/{{$game_name->image}}" >
                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group">
                                    <button data-href="{{action('AdminController@getDeleteGameName',$game_name->id)}}"  data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-danger click_del">
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
    {{ $game_names->links() }}
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