<?php
require_once('../configuracao/conexao.php');
require_once('../model/adicionarModel.php');
    class tarefas extends conectar
    {
        public function listar($email)
        {

            $pagina = new adicionar(); 
            $id_usuario = $pagina->consultar_id($email); 


            $query = "SELECT * FROM tarefas WHERE id_usuario = :id_usuario";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id_usuario', $id_usuario);
            $stmt->execute();

            $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);

            if($resultado){
            return $resultado;
            }
            else{
                return false;
            }
     }
}





?>

