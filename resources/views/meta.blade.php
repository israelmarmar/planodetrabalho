<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
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

        .links>a {
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

    <div class="list-group">
        @foreach($Diarias as $Diaria)
        <a href= "#" class="list-group-item">{{$Diaria["RotinaDefinida"]}}</a>
        @endforeach
    </div>

    <div class="list-group">
        @foreach($Semanais as $Semanal)
        <a href= "#" class="list-group-item">{{$Semanal["RotinaDefinida"]}}</a>
        @endforeach
    </div>

    <div class="list-group">
        @foreach($Mensais as $Mensal)
        <a href= "#" class="list-group-item">{{$Mensal["RotinaDefinida"]}}</a>
        @endforeach
    </div>

</body>

</html>