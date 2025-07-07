<?php
class conectar{
    //definindo constantes de conexão.
    private string $host;
    private string $banco;
    private string $user;
    private string $senha;

    private PDO $pdo; // conexao

    public function __construct()
    {
        $this->host = 'localhost';
        $this->banco = 'php-tarefas';
        $this->user = 'root';
        $this->senha =  '';

    }
    private function conectar()
    {
            try{
            $str = sprintf('mysql:host=%s;bdname=%s', $this->host,  $this->banco);  // utilizando uma forma mais limpa para subistituir os valores, economizando procesamento ao formar uma string com os parametros corretos.

            $this->pdo = new PDO($str , $this->user, $this->senha); //aqui passamos os parametros de senha e user para a conexao pdo

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            }catch(PDOException $ex){

                print_r($ex->getMessage());

            }
    }
}
?> 