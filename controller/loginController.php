<?php
require_once('../model/loginModel.php');

if (isset($_POST['Email']) && isset($_POST['Senha'])) 
    {

    $email = $_POST['Email'];
    $senha = md5($_POST['Senha']);

    $login = new login();
    $status = $login->logar($email, $senha); 


    if ($status == "Logado")
     {
      header('Location:../view/public/home.php?msg=logado');
     } 

    else 
    {
     header('Location:../view/public/login.php?msg=erro');
    }   
}
    else 
    {
     header('Location:../view/public/login.php?msg=campos_vazios');
    }
?>
