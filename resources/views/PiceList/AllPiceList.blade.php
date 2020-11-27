@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">PRICE LIST</h3>
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
                            <th>id</th>
                            <th>user_id</th>
                            <th>name</th>
                            <th>year</th>
                            <th>updated</th>
                            <th>updatedby</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($picelists as $picelist)
                            <tr>
                                <th scope="row">{{$picelist->id}}</th>
                                <td>{{$picelist ->user_id}}</td>
                                <td>{{$picelist ->name}}</td>
                                <td>{{$picelist ->year}}</td>
                                <td>{{$picelist ->updated}}</td>
                                <td>{{$picelist ->updatedby}}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="#">
                                        <i class="fas fa-folder">
                                        </i>
                                        Add
                                    </a>
                                    <a class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm"href="{{route('picelist.deletepicelist',['id'=>$picelist->id])}}">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </a>

                                </td>
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
