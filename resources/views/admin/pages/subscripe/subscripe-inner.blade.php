@extends('app-admin')
@section('admin-content')
    <table id="simple-table" class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Email</th>
            <th>Queshion</th>

        </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    {{$subscripe->email}}
                </td>
                <td>{{$subscripe->question}}</td>

            </tr>



        </tbody>
    </table>
@endsection