@extends('layouts.admin')
@section('content')

    <form method="post" action="{{route('order.insertorder')}}">
        @csrf
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Order</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">user_id</label>
                        <input type="number" id="inputName" name="user_id" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Amount</label>
                        <input type="number" id="inputName" name="amout" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputClientCompany">created</label>
                        <input type="date" id="inputClientCompany" name="created" class="form-control">
                    </div>
                </div>
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Add Order</button>
        </div>
        </form>
@endsection
