<?php
require_once('../model/homeModel.php');
session_start();

if (isset($_SESSION['email'])) 
        {
    
    $email = $_SESSION['email'];
    $consulta = new tarefas;
    $tarefas = $consulta->listar($email);

    function render($pacote,$dados = [])
    {
        extract($dados);
        require($pacote);
    }

    $tarefas = $consulta->listar($email);
if (!$tarefas) {
    $tarefas = [];
}

    render('../view/public/home.php', ['tarefas' => $tarefas]);
}



?>

