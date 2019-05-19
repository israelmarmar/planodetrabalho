<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Plano de trabalho</a>
</nav>

    <div class="card">

        <div class="card-body">

            <h5 class="card-title">Atividade: </h5>
            <p class="card-text">{{$Metas["Atividade"]}}</p>

            <h5 class="card-title">Responsavel: </h5>
            <p class="card-text">{{$Metas["Responsavel"]}}</p>

        </div>
    </div>

    <h1>Diaria</h1>

    <div class="list-group">
        @foreach($Diarias as $Diaria)
        <a href= {{"diaria/".$Diaria["id"]}} class="list-group-item">{{$Diaria["RotinaDefinida"]}}</a>
        @endforeach

        <form action="{{ route('criarmetadiaria') }}">
        <div class="form-group">
            <label for="atividade_id">meta_id:</label>
            <input class="form-control" id="meta_id" name="meta_id" readonly="true" value={{request()->route("id")}}>
            <label for="RotinaDefinida">Rotina diaria:</label>
            <input class="form-control" placeholder="criar nova rotina diaria" id="RotinaDefinida" name="RotinaDefinida">
        </div>

        <button type="submit" class="btn btn-default">Criar</button>

        </form>

    </div>

    <h1>Semanal</h1>

    <div class="list-group">
        @foreach($Semanais as $Semanal)
        <a href= {{"semanal/".$Semanal["id"]}} class="list-group-item">{{$Semanal["RotinaDefinida"]}}</a>
        @endforeach

        <form action="{{ route('criarmetasemanal') }}">
        <div class="form-group">
            <label for="atividade_id">meta_id:</label>
            <input class="form-control" id="meta_id" name="meta_id" readonly="true" value={{request()->route("id")}}>
            <label for="RotinaDefinida">Rotina semanal:</label>
            <input class="form-control" id="RotinaDefinida" placeholder="criar nova rotina semanal" name="RotinaDefinida">
        </div>

        <button type="submit" class="btn btn-default">Criar</button>

        </form>

    </div>

    <h1>Mensal</h1>

    <div class="list-group">
        @foreach($Mensais as $Mensal)
        <a href= "#" class="list-group-item">{{$Mensal["Reunioes"]}}</a>
        @endforeach

        <form action="{{ route('criarmetamensal') }}">
        <div class="form-group">
            <label for="atividade_id">meta_id:</label>
            <input class="form-control" id="meta_id" name="meta_id" readonly="true" value={{request()->route("id")}}>
            <label for="Reunioes">Reuniões:</label>
            <input class="form-control" placeholder="criar nova runião mensal" id="Reunioes" name="Reunioes">
        </div>

        <button type="submit" class="btn btn-default">Criar</button>

        </form>
    </div>

    

</body>

</html>