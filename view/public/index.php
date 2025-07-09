<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastrar</title>
  </head>
<body>
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