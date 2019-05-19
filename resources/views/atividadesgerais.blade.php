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

    <h5 class="card-title">Nome do Processo: </h5>
    <p class="card-text">{{$Atividades["NomeProcesso"]}}</p>

  </div>
</div>
    
<h1>Metas</h1>

    <div class="list-group">
        @foreach($Metas as $Meta)
        <a href= {{"meta/".$Meta["id"]}} class="list-group-item">{{$Meta["Atividade"]}}</a>
        @endforeach
    </div>

    <form action="{{ route('criarmeta') }}">
        <div class="form-group">

            <label for="atividade_id">atividade_id:</label>
            <input class="form-control" id="atividade_id" name="atividade_id" readonly="true" value={{request()->route("id")}}>

            <label for="Atividade">Atividade:</label>
            <input class="form-control" id="Atividade" name="Atividade">

            <label for="Responsavel">Responsavel:</label>
            <input class="form-control" id="Responsavel" name="Responsavel">

        </div>

        <button type="submit" class="btn btn-default">Criar</button>

    </form>

    <div class="card-deck">

        <div class="card">

            <div class="card-body">

                <h1 class="card-title">Configurações</h1>

                <button class="btn btn-default">Levantamento de ativos</button>

                <button class="btn btn-default">Cadastrar usuário</button>

                <button class="btn btn-default">Notificações</button>

                <button class="btn btn-default">Alterar dados pessoais</button>

                </div>

            </div>

        <div class="card">

            <div class="card-body">

            <a href={{request()->route("id").'/incidente'}}><h1 class="card-title">Incidentes</h1></a>

        </div>

        <div class="card">

            <div class="card-body">

                <h1 class="card-title">Problemas</h1>

                <button class="btn btn-default">Acompanhar problemas</button>

            <button class="btn btn-default">Soluções</button>

        </div>

        <div class="card">

            <div class="card-body">

                <h1 class="card-title">Mudanças</h1>

                <button class="btn btn-default">Implantar ferramenta</button>

                <button class="btn btn-default">Implantar processo</button>

                <button class="btn btn-default">Alterar processo</button>

                <button class="btn btn-default">Acompanhamento</button>

        </div>


        <div class="card">

            <div class="card-body">

                <h1 class="card-title">Operações</h1>

        </div>

        <div class="card">

            <div class="card-body">

                <h1 class="card-title">Gerar Relatorio</h1>

                <button class="btn btn-default">Semanal</button>

                <button class="btn btn-default">Mensal</button>

        </div>


    </div>


</body>


</html>