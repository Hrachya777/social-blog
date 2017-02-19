@extends('app-admin')
@section('admin-content')

@include('message')
<div class="col-xs-12">
    <div class="row">
        <div class="col-xs-12">
            <table id="simple-table" class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        created_at
                    </th>
                    <th class="hidden-480">Status</th>

                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td>
                            {{$new->title}}
                        </td>
                        <td>{{substr($new->description, 0, 8)}}...</td>
                        <td class="hidden-480">
                            @if($new->image)
                                <img style="width:50px;height: 50px" src="/page_uploade/news/{{$new->image}}">
                            @else
                                Not Image
                            @endif
                        </td>
                        <td>{{date('d/m/Y', strtotime($new->created_at))}}</td>

                        <td class="hidden-480">
                            <span class="label label-sm label-warning">Expiring</span>
                        </td>
                        <td>
                            <div class="hidden-sm hidden-xs btn-group">

                                <button class="btn btn-xs btn-success">
                                    <i class="ace-icon fa fa-check bigger-120"></i>
                                </button>
                                <button class="btn btn-xs btn-warning">
                                    <i class="ace-icon fa fa-flag bigger-120"></i>
                                </button>

                                <button data-href="{{action('AdminController@getDeleteNews',$new->id)}}"  data-toggle="modal" data-target="#myModal" class="btn btn-xs btn-danger click_del">
                                    <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                </button>
                                <a href="{{action('AdminController@getOneNews',$new->id)}}">
                                    <button style="height: 26px;" class="btn btn-xs btn-info">
                                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                                    </button>
                                </a>

                                <a  href="{{action('AdminController@getPageGallery',[2, $new->id])}}">
                                    <button style="height: 26px" class="btn btn-xs btn-primary">
                                        <i class="glyphicon glyphicon-picture"></i>
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

@endsection

@section('script')
    {!! HTML::script( asset('assets/admin/js/delete.js') ) !!}
@endsection