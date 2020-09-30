<?php
$acao = 'recuperar';
require_once "Model/UserController.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  </head>
  <body>
      <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="index.php">CRUDZADA</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                      <a class="nav-item nav-link" href="#">Registros</a>
                  </div>                
              </div>
             
                <form class="form-inline my-2 my-lg-0" >
                    <input class="input-search form-control mr-sm-2" alt="lista-user" type="text" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
          </nav>
      </header>
  <table class="table table-dark lista-user">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Sobrenome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Bairro</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $usuarios){ ?>
    <tr>
        <td><?=$usuarios['id_user'] ?></td>
        <td><?=$usuarios['nome'] ?></td>
        <td><?=$usuarios['sobrenome'] ?></td>
        <td><?=$usuarios['endereco'] ?></td>
        <td><?=$usuarios['bairro'] ?></td>
        <td><?=$usuarios['cidade'] ?></td>
        <td><?=$usuarios['estado'] ?></td>

        
        <td> <a href="update.php?id=<?=$usuarios['id_user']?>" class="btn btn-outline-success">Editar</a> </td>
        <td> <a href="Model/UserController.php?&id=<?=$usuarios['id_user']?>" class="btn btn-outline-danger">Excluir</a></td>        
    </tr>
  <?php }?>
 
  </tbody>
</table>
 <div>
    <a href="index.php" class="btn btn-outline-primary">Novo Registro</a> 
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="pesquisa.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>