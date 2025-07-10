<?php
require_once('../configuracao/conexao.php');

class login extends conectar{

    public function logar($email,$senha){
       $query = "SELECT email, senha FROM usuarios WHERE email = :email AND senha = :senha";
       $stmt = $this->pdo->prepare($query);
       $stmt->bindParam(':email',$email);
       $stmt->bindParam(':senha', $senha);
       $stmt->execute();

       if($stmt->rowCount() > 0){
        
         session_start();
         $_SESSION['email'] = $email;
        
         return"Logado";
        
       }
       else{
        return"Não logado";
       }
    }
}
?>