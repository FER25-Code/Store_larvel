@extends('layouts.admin')
@section('content')

    <form method="post" action="{{route('wallet.insertwallet')}}">
        @csrf
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">WALLET</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputName">user_id</label>
                    <input type="number" class="form-control" name="user_id" placeholder="Enter user id ">
                </div>
                <div class="form-group">
                    <label for="exampleInputbalance">balance</label>
                    <input type="number" class="form-control" name="balance" placeholder="Enter balance">
                </div>
                <div class="form-group">
                    <label for="exampleInputdue">due</label>
                    <input type="number" class="form-control" name="due" placeholder="Enter due">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Add Wallet</button>
                </div>
            </div>
        </div>
    </form>
@endsection
