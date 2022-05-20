<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
            <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/principal.css">
            <meta charset="UTF-8">	
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="imagem/png" href="img/senac-logo-4.png" />
            <title>Sistema de Alunos</title>
        </head>
        <body>
            <header>
      <nav>
        <a class="logo" href="http://localhost/projeto_final/principal.php">Senac RJ</a>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      </nav>
    </header>
    <main></main>  
            <div class="container">
                <div class="row">
                    <div class="col-4">
                    <a class="nav-link" href="cadastrar.php"><img style = "margin-left: 19%" height="200px" width="200px" src="img\Cadastro-removebg-preview.png">
                        <h5 style="text-align: center">Cadastro de Alunos</h5></a>
                    </div>
                    <div class="col-4">
                    <a class="nav-link" href="consultaaluno.php"><img style = "margin-left: 20%" height="200px" width="200px" src="img\Consultar-histórico-de-chamados-por-número-de-série-do-equipamento-e-ou-por-cliente.-removebg-preview.png">
                        <h5 style="text-align: center">Consulta de Alunos</h5></a>
                    </div>
                    <div class="col-4">
                    <a class="nav-link" href="cadastrousuario.php"><img style = "margin-left: 19%" height="200px" width="200px" src="img\images-removebg-preview (1).png">
                        <h5 style="text-align: center">Cadastro de Usuários</h5></a>
                    </div>
                </div>
            <!--       -->
            <footer id="myFooter">
                   
                </footer>
        </body>
    </html>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
    <script src="mobile-navbar.js"></script>

    <script>
      function sair(){
        window.location='index.php';
        unset ($_SESSION['acesso']);
      }
    </script>