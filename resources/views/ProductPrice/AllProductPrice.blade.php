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
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">pricelistversion_id</th>
            <th scope="col">product_id</th>
            <th scope="col">unitprice</th>
            <th scope="col">qtytodiscount</th>
            <th scope="col">discount</th>
            <th scope="col">discountprice</th>
            <th scope="col">updated</th>
            <th scope="col">updatedby</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productprices as $productprice)
        <tr>
            <th scope="row">{{$productprice->id}}</th>
            <td>{{$productprice ->pricelistversion_id}}</td>
            <td>{{$productprice ->product_id}}</td>
            <td>{{$productprice ->unitprice}}</td>
            <td>{{$productprice ->qtytodiscount}}</td>
            <td>{{$productprice ->discount}}</td>
            <td>{{$productprice ->discountprice}}</td>
            <td>{{$productprice ->updated}}</td>
            <td>{{$productprice ->updatedby}}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
    </body>
</html>
