
        @extends('layouts.admin')
        @section('content')
    <form method="post" action="{{route('product.insertProduct')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputName">Prouduct Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Prouduct">
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">Prouduct Description</label>
                <input type="text" class="form-control" name="Description" placeholder="Enter Description">
            </div>

        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Product</button>
        </div>
        </div>
    </form>
        @endsection

