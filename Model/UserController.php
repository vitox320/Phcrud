<?php

$acao = isset($_GET['acao']) ? $_GET['acao']: $acao;

require_once "User.php";
require_once "UserModel.php";

$user = new \crud\Model\User();
$userModel = new \crud\Model\UserModel();


if($acao == 'inserir'){
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $sobrenome = filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_SPECIAL_CHARS);
    $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $estado = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_SPECIAL_CHARS);

    $user->__set("nome", $nome);
    $user->__set("sobrenome", $sobrenome);
    $user->__set("endereco", $endereco);
    $user->__set("bairro", $bairro);
    $user->__set("cidade", $cidade);
    $user->__set("estado", $estado);

    $userModel->create($user);
    header('location:../index.php?cadastro=1');

}else if($acao == 'recuperar'){
    $users = $userModel->read();

}else if($acao == 'deletar'){
    $id = $_GET['id'];
    $userModel->delete($id);
    header('location:../show.php?excluir=1');

}else if ($acao == 'editar'){

    $id = $_GET['id'];

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $sobrenome = filter_input(INPUT_POST, "sobrenome", FILTER_SANITIZE_SPECIAL_CHARS);
    $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_SPECIAL_CHARS);
    $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_SPECIAL_CHARS);
    $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $estado = filter_input(INPUT_POST, "estado", FILTER_SANITIZE_SPECIAL_CHARS);

    $user->__set("nome", $nome);
    $user->__set("sobrenome", $sobrenome);
    $user->__set("endereco", $endereco);
    $user->__set("bairro", $bairro);
    $user->__set("cidade", $cidade);
    $user->__set("estado", $estado);


    $userModel->update($user,$id);
    header('location:../show.php?editar=1');



}



