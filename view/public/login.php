<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
<body>
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