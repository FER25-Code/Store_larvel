@extends('layouts.admin')
@section('content')
    @csrf
    <form method="post" action="{{route('order.insertorder')}}">
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
                        <label for="inputStatus">user_id</label>
                        <select id="inputStatus" class="form-control custom-select">
                            <option selected disabled>Select one</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
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
                <!-- /.card-body --></div>
        </form>
@endsection
