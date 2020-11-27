@extends('layouts.admin')
@section('content')
    <form method="post" action="{{route('product.updateProduct',$product->id )}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName">Prouduct Name</label>
                <input type="text" class="form-control" name="name" value="{{$product -> name}}"aria-describedby="nameHelp"  >
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Prouduct Description</label>
                <input type="text" class="form-control" name="Description" value="{{$product -> Description}}">
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>
        </div>
    </form>
@endsection
