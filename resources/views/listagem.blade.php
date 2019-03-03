
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de Produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Listagem de Produtos</h1>
        <table class="table table-bordered table-hover">
            @foreach($produtos as $p)
        <tr class='text-center'>
            <td>  {{$p->nome}}  </td>
            <td>  {{$p->valor}} </td>
            <td>  {{$p->descricao}} </td>
            <td>  {{$p->quantidade}} </td>
            <td>
            <a href="/produtos/mostra"><i class="material-icons">search</i></a>
            </td>
        </tr>
            @endforeach
        </table>
        
    </div>

</body>
</html>