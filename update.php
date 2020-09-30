<?php

require_once "Model/UserModel.php";
$id = $_GET['id'];
$userModel = new \crud\Model\UserModel();

$users = $userModel->getUserById($id)

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <title>Editar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

    
  <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="index.php">CUDZADA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="show.php">Registros</a>

              </div>
          </div>
      </nav>  
  </header>
  
  <body>
       <?php foreach ($users as $user) { ?>
        <form action="Model/UserController.php?acao=editar&id=<?=$user['id_user']?>" method="post">

            <div class="form-group">
                <label for="nome"></label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?= $user['nome'] ?>" placeholder="Seu nome aqui"required>
            </div>

            <div class="form-group">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome" id="sobrenome" value="<?= $user['sobrenome'] ?>" placeholder="Seu sobrenome aqui"required>
            </div>
                
            <div class="form-group">
                <label for="">Cep</label>
                <input type="text" class="form-control" onblur="getCep(this.value)" id="cep" placeholder="Cep">
            </div>
            <div class="form-group">
                <label for="">Endereco</label>
                <input type="text" class="form-control" name="endereco" id="endereco" value="<?= $user['endereco'] ?>" placeholder="Endereco"required>
            </div>
            <div class="form-group">
                <label for="">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="<?= $user['bairro'] ?>" placeholder="Seu bairro"required>
            </div>
            <div class="form-group">
                <label for="">Cidade</label>
                <input type="text" class="form-control"  name="cidade" id="cidade" value="<?= $user['cidade'] ?>" placeholder="Sua Cidade"required>
            </div>
            <div class="form-group">
                <label for="">Estado</label>
                <input type="text" class="form-control" name="estado"  id="estado" value="<?= $user['estado'] ?>" placeholder="Seu Estado"required>
            </div>
            <input type="submit" value="Atualizar" class="btn btn-outline-dark">

        </form>
        <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="script.js"> </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
