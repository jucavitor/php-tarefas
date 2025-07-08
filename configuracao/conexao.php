<?php
class conectar{
    private string $host;
    private string $banco;
    private string $user;
    private string $senha;

    protected PDO $pdo;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->banco = 'phptarefas';
        $this->user = 'root';
        $this->senha = '';

        $this->conectar();
    }

    private function conectar()
    {
        try {
            $str = sprintf('mysql:host=%s;dbname=%s', $this->host, $this->banco);
            $this->pdo = new PDO($str, $this->user, $this->senha);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $ex) {
            echo "Erro na conexão: " . $ex->getMessage();
        }
    }
}

// new conectar(); 
?>
