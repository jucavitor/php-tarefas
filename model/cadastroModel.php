<?php
 require_once('../configuracao/conexao.php');
 
class verifica_login extends conectar
{

    public function validacao($email, $senha,$nome)
    {
       try
       {
        $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        $stmt->execute();

        if($stmt->rowCount() > 0)
        {
         header('refresh:3;url=../view/public/login.php');
         print"Seu login já existe no nosso banco de dados!";
         exit;
        }
        else
        {   
          //print "Seu login ainda não existe";
          $this->cadastrar($email, $senha, $nome);
          
        }
        
       }
      finally{}
    }

    public function cadastrar($email, $senha, $nome){

         try{
            $query = "INSERT INTO usuarios (nome, email, senha)VALUES (:nome , :email , :senha)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':senha',$senha);
            
            $cadastro = $stmt->execute();

            if($cadastro){
               header('refresh:3;url=../view/public/login.php');
               print"Usuario cadastrado com sucesso!";
               exit;
            }
            else{
               header('refresh:3;url=../view/public/index.php');
               print"Erro ao cadastrar o seu usuario";
            }
         } 
       finally{}
    }
}

?>       