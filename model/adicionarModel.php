<?php
require_once('../configuracao/conexao.php');

class pagina_principal extends conectar
{
    public function consultar_id($email)
    {
        $query = "SELECT id_usuario FROM usuarios WHERE email = :EMAIL";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(":EMAIL", $email);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($resultado) 
        {
            return $resultado['id_usuario'];
        } 
        else 
        {
            return null;
        }
    }



    public function cadastrar_tarefa($email, $titulo, $descricao, $prazo)
    {
        try {
            $id_usuario = $this->consultar_id($email);

            if ($id_usuario === null)
            {
                return false;
            }

            $query = "INSERT INTO tarefas (id_usuario, titulo, descricao, prazo) VALUES (:ID_USUARIO, :TITULO, :DESCRICAO, :PRAZO)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':ID_USUARIO', $id_usuario);
            $stmt->bindParam(':TITULO', $titulo);
            $stmt->bindParam(':DESCRICAO', $descricao);
            $stmt->bindParam(':PRAZO', $prazo);

            $stmt->execute();
            return true;

        } 
        catch (PDOException $e)
        {
            return false;
        }
    }
}
?>
