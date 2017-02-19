@extends('app-admin')
@section('admin-content')

    @include('message')

    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>Queshion</th>

                        <th>
                            <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                            created at
                        </th>


                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscrips as $subscrip)
                        <tr>
                            <td>
                                {{$subscrip->email}}
                            </td>
                            <td>{{substr($subscrip->question, 0, 8)}}...</td>

                            <td>{{date('d/m/Y', strtotime($subscrip->created_at))}}</td>

                            <td class="hidden-480">
                                @if($subscrip->status == '0')
                                    <span class="label label-sm label-inverse arrowed-in">unread</span>
                                @else
                                    <span class="label label-sm label-success">read</span>
                                @endif

                            </td>
                            <td>
                                <div class="hidden-sm hidden-xs btn-group">

                                    <button data-href="{{action('AdminController@getDeleteSubscripe',$subscrip->id)}}"  data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-danger click_del">
                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                    </button>
                                    <a href="{{action('AdminController@getOneSubscripe',[1,$subscrip->id])}}">
                                        <button style="height: 26px;" class="btn btn-xs btn-info">
                                            <i class="glyphicon glyphicon-eye-open"></i>
                                        </button>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

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
    {{ $subscrips->links() }}
@endsection

@section('script')
    {!! HTML::script( asset('assets/admin/js/delete.js') ) !!}
@endsection