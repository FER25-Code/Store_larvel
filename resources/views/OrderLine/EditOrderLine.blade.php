<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <form method="post" action="{{route('orderline.updateorderline',$orderline->id )}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Order_id</label>
            <input type="number" class="form-control" name="user_id" value="{{$orderline ->Order_id}}" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputName">product_id</label>
            <input type="number" class="form-control" name="product_id" value="{{$orderline ->product_id}}" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputName">Qty</label>
            <input type="number" class="form-control" name="Qty"  value="{{$orderline ->Qty}}" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputName">price</label>
            <input type="number" class="form-control" name="price"  value="{{$orderline ->price}}" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputDescription">created</label>
            <input type="date" class="form-control" name="created" value="{{$orderline ->created}}">
        </div>
        <div class="form-group">
            <label for="exampleInputName">updated</label>
            <input type="date" class="form-control" name="updated" value="{{$orderline ->updated }}" aria-describedby="nameHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputName">updatedby</label>
            <input type="date" class="form-control" name="updatedby" value="{{$orderline ->updatedby }}" aria-describedby="nameHelp">
        </div>
        <button type="submit" class="btn btn-primary">Update OrderLine</button>
    </form>
    </body>
</html>