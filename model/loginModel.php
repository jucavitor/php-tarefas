<?php
 require_once('../configuracao/conexao.php');
 
class verifica_login extends conectar
{

    public function validacao($email, $senha)
    {
     
       try
       {
        $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        if($stmt->rowCont() > 0)
        {
           print "Seu login ainda não existe";
        }
        else
        {
         print "Seu login já existe no nosso banco de dados"; //parei aqui 08/07
        }
        
       }

    }
}




?>