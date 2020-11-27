
@extends('layouts.admin')
@section('content')
    <form method="post" action="{{route('wallet.updatewallet',$wallet->id )}}">
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
            <div class="form-group">
                <label for="exampleInputName">user_id</label>
                <input type="number" class="form-control" name="user_id" value="{{$wallet ->user_id}}" aria-describedby="nameHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputName">balance</label>
                <input type="number" class="form-control" name="balance"  value="{{$wallet ->balance }}" aria-describedby="nameHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputDescription">due</label>
                <input type="number" class="form-control" name="due" value="{{$wallet ->due}}">
            </div>
            <div class="form-group">
                <label for="exampleInputName">updated</label>
                <input type="date" class="form-control" name="updated" value="{{$wallet ->updated }}" aria-describedby="nameHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputName">updatedby</label>
                <input type="date" class="form-control" name="updatedby" value="{{$wallet ->updatedby }}" aria-describedby="nameHelp">
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Wallet</button>
            </div>
        </div>
    </form>
@endsection
