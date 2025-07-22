<?php

if(isset($_GET['msg']))
{
  if($_GET['msg'] == "Erro")
  {
    print"Erro ao cadastrar usuario!";
  }
  if($_GET['msg'] == "Existente")
  {
    print"Usuario já cadastrado!";
  }
}
?>




<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar</title>
      <link rel="stylesheet" href="../CSS/index.css">
  </head>
<body>

  <div class="navbar">
    <h1>Meu Sistema</h1>
    <div class="nav-links">
      <a href="./index.php">cadastro</a>
      <a href="./login.php">Login</a>
    </div>
  </div>
  <br><br>

    <form method="POST" action="../../controller/cadastroController.php">
      <fieldset>Realize o seu cadastro!</fieldset>
      <table>
         <tr>
            <td><input type="text" placeholder="Nome" name="Nome"></td>
         </tr>
         <tr>
            <td><input type="text"  placeholder="E-mail" name="Email"></td>
         </tr>
         <tr>
            <td><input type="password"  placeholder="Senha" name="Senha"></td>
         </tr>
     
         <tr>
            <td><input type="submit" name="submit" value="Cadastrar"></td>
         </tr>
      </table>
    </form>
</body>
</html>