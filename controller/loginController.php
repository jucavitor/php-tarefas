<?php
require_once('../model/loginModel.php');

if (isset($_POST['Email']) && isset($_POST['Senha'])) {

    $email = $_POST['Email'];
    $senha = md5($_POST['Senha']);

    $login = new login();
    $status = $login->logar($email, $senha); 


    if ($status == "Logado")
     {
       header("refresh:3;url=../view/public/home.php");
       echo "Redirecinando para o Login!";
       exit;  
     } 

    else 
    {
    header("refresh:3;url=../view/public/login.php");
    echo "Usuario ou senha invalidos!";
    exit;
    }   
}
    else 
    {
        echo "Preencha todos os campos.";
    }
?>
