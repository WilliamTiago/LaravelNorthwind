    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    @section('css')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    @show

    <title>Northwind</title>
    </head>
    <body>
        
        <!-- Header -->
        <header class="bg-dark" style="position: fixed; width: 100%">
            <div class ="container">
                <div class ="navbar-header">
                    <a href = "/home/" class ="navbar-brand text-white">Northwind</a>
                </div>
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Funcionário</a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="/home/consultafuncionario">Consultar Funcionários</a>   
                            <a class="dropdown-item" href="/home/cadastrofuncionario">Cadastrar Funcionários</a>
                            <a class="dropdown-item" href="/home/consultafuncionarioterritorio">Funcionário x Território</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Território</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/home/consultaterritorio">Consultar Território</a>
                                <a class="nav-link disabled" href="/home/cadastroterritorio">Cadastrar Território</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Região</a>
                            <div class="dropdown-menu">
                                <a class="nav-link disabled" href="/home/consultaregiao">Consultar Região</a>
                                <a class="nav-link disabled" href="/home/cadastroregiao">Cadastrar Região</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Conteudo da pagina -->
        <div class="container">
            @yield('content')
        </div>
        <!-- Footer -->
        <footer class="bg-dark text-white" style="margin-bottom: 0px">
            <div class="container" style="padding: 10px">
                <h1>NORTHWIND</h1>
                <p>A vida é bela!</p>
              </div>              
        </footer>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>