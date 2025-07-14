<?php
require_once('../model/cadastroModel.php');

if(isset($_POST['submit']))
{
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $senha = md5($_POST['Senha']);

    $verificado = new verifica_login();
   $resultado = $verificado->validacao($email,$senha,$nome);

    if($resultado == "Existente")
    {
        header('Location:../view/public/index.php?msg=Existente');
    }

    if($resultado == "Cadastrado")
    {
        header('Location ../view/public/login.php');
    }
    if($resultado == "Erro")
    {
        header('Location:../view/public/index.php?msg=Erro');
    }
}
?>