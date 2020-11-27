
@extends('layouts.admin')
@section('content')
    @csrf
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">ProductPrice Table</h3>
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
                        <th>pricelistversion_id</th>
                        <th>product_id</th>
                        <th>unitprice</th>
                        <th>qtytodiscount</th>
                        <th>discount</th>
                        <th>discountprice</th>
                        <th>updated</th>
                        <th>updatedby</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productprices as $productpricesFind)

                        <tr>
                            <th scope="row">{{$productpricesFind->id}}</th>
                            <td>{{$productpricesFind -> pricelistversion_id }}</td>
                            <td>{{$productpricesFind -> product_id }}</td>
                            <td>{{$productpricesFind -> unitprice }}</td>
                            <td>{{$productpricesFind -> qtytodiscount }}</td>
                            <td>{{$productpricesFind -> discount }}</td>
                            <td>{{$productpricesFind -> discountprice }}</td>
                            <td>{{$productpricesFind -> updated }}</td>
                            <td>{{$productpricesFind -> updatedby }}</td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#{{--{{route('productprice.findproductprice',['id'=>$product->id])}}--}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="#{{--{{route('product.editproduct',['id'=>$product->id])}}--}}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <a class="btn btn-danger btn-sm" href="#{{--{{route('product.deleteproduct',['id'=>$product->id])}}--}}">
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
