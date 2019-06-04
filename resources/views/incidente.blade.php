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

<h1 class="card-title">Incidentes</h1>

    <div class="list-group">
        @foreach($Incidentes as $Incidente)
        <a href="#" class="list-group-item">{{$Incidente["Causa"]}}</a>
        @endforeach
    </div>

    <h1 class="card-title">Novo incidente</h1>

    <form action="{{ route('criarincidente') }}">
        <div class="form-group">

            <label for="atividade_id">atividade_id:</label>
            <input class="form-control" id="atividade_id" name="atividade_id" readonly="true" value={{request()->route("id")}}>

            <label for="Data do ocorrido">Data do ocrrido</label>
            <input class="form-control" id="Tempo" placeholder="DD/MM/AAAA" name="Tempo">

            <label for="Causa">Causa</label>
            <input class="form-control" id="Causa" placeholder="Descreva a causa" name="Causa">

            <label for="Solucao">Solução</label>
            <input class="form-control" id="Solucao" placeholder="Descreva a solução" name="Solucao">

            
            
        </div>

        <button type="submit" class="btn btn-default">Salvar</button>

    </form>

</body>

</html>