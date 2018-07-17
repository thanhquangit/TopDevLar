@extends('admin.layout.index')
@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Table</a></li>
                    <li class="active">Data table</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Company</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Content</th>
                                    <th>Time at</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contact as $ct)
                                    <tr>
                                        <td>{{$ct->fullname}}</td>
                                        <td>{{$ct->company}}</td>
                                        <td>{{$ct->email}}</td>
                                        <td>{{$ct->phone}}</td>
                                        <td>{{$ct->content}}</td>
                                        <td>{{$ct->created_at->format('H:i:s d/m/Y')}}</td>
                                        @if($ct->status == 0)
                                            <td><input type="submit" class="btn btn-danger" value="To Send"> </td>
                                        @else
                                           <td><input type="submit" class="btn btn-danger" value="Sent" disabled="true"> </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- .animated -->
</div>
@endsection
<!-- .content -->