<?php
require_once('../model/adicionarModel.php');
 session_start();

if(isset($_POST['criar-tarefa']) AND isset($_SESSION['email']))
{

    //print"" .$_SESSION['email'];

    $email = $_SESSION['email'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $prazo = $_POST ['prazo'];


    $tarefa = new adicionar();
    $resultado = $tarefa->cadastrar_tarefa($email, $titulo, $descricao, $prazo);


    if ($resultado == true) 
    {
       header('Location:../view/public/adicionar.php?m=adicionado');
    } 
    else 
    {  
        header('Location:../view/public/adicionar.php?m=erro');
    }


}






?>