<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
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

<script>

function createJSON() {

        item = {};
        item ["Item"] = document.getElementById("item").value;
        item ["Status"] = document.getElementById("status").value;


        json=JSON.parse(document.getElementById("json").value);
        json.push(item)

        document.getElementById("Manutencao").value=JSON.stringify(json);
        console.log(json);
}
</script>


</head>

<body>
    
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Plano de trabalho</a>
</nav>
    
    <div class="list-group">
       
    </div>

    @foreach($Manutencoes as $Manutencao)
        <input type="text" name="item" readonly="true" value="{{$Manutencao->Item}}">
        <input type="text" name="item" readonly="true" value="{{$Manutencao->Status}}"><br>
    @endforeach

    <input type="text" id="item" name="item" placeholder="Novo item" onchange="createJSON()">
    <input type="text" id="status" name="status" placeholder="A fazer" onchange="createJSON()"><br>


    <form action={{$tempo."atualizar/".$id.""}} method="post">

        <input type="hidden" id="Manutencao" name="Manutencao">
        <button type="submit" class="btn btn-default">Criar</button>
 
    </form>

    <input id="json" type="hidden" readonly="true" value="{{json_encode($Manutencoes)}}">

</body>

</html>