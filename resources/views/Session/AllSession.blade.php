
@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Products Table</h3>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">user_id</th>
                            <th scope="col">ip_address</th>
                            <th scope="col">user_agent</th>
                            <th scope="col">payload</th>
                            <th scope="col">last_activity</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sessions as $session)
                            <tr>
                                <th scope="row">{{$session->id}}</th>
                                <td>{{$session ->user_id}}</td>
                                <td>{{$session ->ip_address}}</td>
                                <td>{{$session ->user_agent}}</td>
                                <td>{{$session ->payload}}</td>
                                <td>{{$session ->last_activity}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@endsection
