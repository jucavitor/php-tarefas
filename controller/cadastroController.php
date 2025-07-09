<?php
require_once('../model/cadastroModel.php');

if(isset($_POST['submit']))
{
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];
    $senha = md5($_POST['Senha']);

    $verificado = new verifica_login();
    $verificado->validacao($email,$senha,$nome);

}
?>