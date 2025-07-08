<?php
require_once('../model/loginModel.php');

if(isset($_POST['submit']))
{

    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $verificado = new verifica_login();
    $verificado->validacao($email,$senha);

}



?>