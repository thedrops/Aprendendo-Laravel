
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controle de Estoque</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
    
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <!--
            <li class="nav-item">
                <a class="nav-link" href="/produtos">Produtos</a>
            </li>
            -->
            <li class="nav-item">
                <a class="nav-link" href="{{action('ProdutoController@lista')}}">Listagem</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{action('ProdutoController@novo')}}">Novo</a>
            </li>
            
            </ul>
        </div>
        </nav>

        @yield('conteudo')
      

    </div>

</body>
</html>