<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Plano de trabalho</a>
</nav>

    <div class="card">

        <div class="card-body">

            <h5 class="card-title">Rotina definida: </h5>
            <p class="card-text">{{$Meta["RotinaDefinida"]}}</p>

        </div>
    </div>


    <div class="card-deck">


        <div class="card">

            <div class="card-body">

                <button class="btn btn-default">Rotina</button>

                <button class="btn btn-default">Backups</button>

                <a href={{"/atividades/meta/diaria/".$Meta["id"]."/manutencao"}} class="btn btn-default">Manutenções(check)</a>

                <button class="btn btn-default">Progresso geral</button>

        </div>



    </div>


</body>

</html>