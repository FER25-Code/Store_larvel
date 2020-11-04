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
            <th scope="col">product_id</th>
            <th scope="col">storage_id</th>
            <th scope="col">typeTransaction</th>
            <th scope="col">Qty</th>
            <th scope="col">Created</th>
            <th scope="col">Createdby</th>
        </tr>
        </thead>
        <tbody>
        @foreach($transactions as $transaction)
        <tr>
            <th scope="row">{{$transaction -> id }}</th>
            <td>{{$transaction -> product_id }}</td>
            <td>{{$transaction -> storage_id }}</td>
            <td>{{$transaction -> typeTransaction }}</td>
            <td>{{$transaction -> Qty }}</td>
            <td>{{$transaction -> Created }}</td>
            <td>{{$transaction -> Createdby }}</td>
        </tr>
        @endforeach

        </tbody>
    </table>
    </body>
</html>
