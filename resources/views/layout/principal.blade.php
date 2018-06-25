<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Controle de Estoque</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="../vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <a class="navbar-brand" href="/home">
                            Northwind
                        </a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/produtos">Listagem</a></li>
                        <li><a href="/produtos/novo">Novo</a></li>
                    </ul>

                </div>
            </nav>
            

            @yield('conteudo')

            <footer class="footer">
                <p>Laravel Estoque</p>
        </div>
    </body>
</html>
