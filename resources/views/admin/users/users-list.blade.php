@extends('app-admin')
@section('admin-content')
    @if(count($users) == 0)
        <h1>Not users</h1>
    @else

        <h1>Users List</h1>
        <div class="row">
            <div class="col-xs-12">
                @include('message')

                <div class="row">
                    <div class="col-xs-12">
                        <table id="simple-table" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Email</th>
                                <th>
                                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                    Created at
                                </th>
                                <th class="hidden-480"></th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$user->firstname}}
                                    </td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        {{date('d/m/Y', strtotime($user->created_at))}}
                                    </td>
                                    <td>
                                        <div class="hidden-sm hidden-xs btn-group">

                                            <button data-href="{{action('AdminController@getDeleteUser',$user->id)}}" class="btn btn-xs btn-danger click_del" data-toggle="modal" data-target="#myModal">
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
        {{ $users->links() }}
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