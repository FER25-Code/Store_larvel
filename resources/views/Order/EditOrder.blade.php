
@extends('layouts.admin')
@section('content')

    <form method="post" action="{{route('order.updateorder',$order->id )}}">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Order</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="inputName">user_id</label>
                    <input type="number" id="inputName" name="user_id"  value="{{$order ->user_id}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputName">Amount</label>
                    <input type="number" id="inputName" name="amout"  value="{{$order ->amout}}"class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">created</label>
                    <input type="date" id="inputClientCompany" name="created" value="{{$order ->created}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">updated</label>
                    <input type="date" id="inputClientCompany" name="updated"  value="{{$order ->updated}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputClientCompany">updatedby</label>
                    <input type="date" id="inputClientCompany" name="updatedby" value="{{$order ->updatedby}}" class="form-control">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Order</button>
        </div>
    </form>
@endsection
