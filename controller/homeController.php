<?php
require_once('../model/homeModel.php');
 session_start();

if(isset($_POST['criar-tarefa']) AND isset($_SESSION['email']))
{

    //print"" .$_SESSION['email'];

    $email = $_SESSION['email'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $prazo = $_POST ['prazo'];


    $tarefa = new pagina_principal();//problema ao cadastrar tarefa, sempre da erro :(
    $resultado = $tarefa->cadastrar_tarefa($email, $titulo, $descricao, $prazo);


    if ($resultado === true) 
    {
       header('Location:../view/public/home.php?m=adicionado');
    } 
    else 
    {  
        header('Location:../view/public/home.php?m=erro');
    }


}






?>