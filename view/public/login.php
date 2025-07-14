<?php

if(isset($_GET['msg']))
{
    if($_GET['msg'] == 'erro')
    {
        print"Usuario ou senha inválidos!";
    }
    if($_GET['msg'] == 'campos_vazios')
    {
        print  "Preencha todos os campos.";
    }
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/login.css">
        <title>Login</title>
    </head>
<body>

  <div class="navbar">
    <h1>Meu Sistema</h1>
    <div class="nav-links">
      <a href="#">Início</a>
      <a href="#">Sobre</a>
    </div>
  </div>
  <br><br>

  <form action="../../controller/loginController.php" method="POST">
       <fieldset>Login
        <table>
            <tr>
                <td><input type="text" placeholder="E-mail" name="Email"></td>
            </tr>
             <tr>
                <td><input type="password" placeholder="Senha" name="Senha"></td>
            </tr>
                <tr>
                <td><a href="">Esqueci minha senha</a></td>
            </tr>
             <tr>
                <td><input type="submit" value="Login" ></td>
            </tr>
        </table>
      </fieldset>
    </form>
</body>
</html>