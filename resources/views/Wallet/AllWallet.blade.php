
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
                            <th scope="col">balance</th>
                            <th scope="col">due</th>
                            <th scope="col">updated</th>
                            <th scope="col">updatedby</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($wallets as $wallet)
                            <tr>
                                <th scope="row">{{$wallet->id}}</th>
                                <td>{{$wallet ->user_id}}</td>
                                <td>{{$wallet ->balance}}</td>
                                <td>{{$wallet ->due}}</td>
                                <td>{{$wallet ->updated}}</td>
                                <td>{{$wallet ->updatedby}}</td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="{{route('wallet.editwallet',['id'=>$wallet->id])}}">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="{{route('wallet.editwallet',['id'=>$wallet->id])}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="{{route('wallet.deletewallet',['id'=>$wallet->id])}}">
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
