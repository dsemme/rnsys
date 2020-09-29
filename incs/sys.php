<?php
    // define("URL", "http://rnsys.gruporosinetos.com");
    define("URL", "http://localhost/rnsys");

    // conexao 
    class dataBase{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'rnsysdb';

        public function conecta_db(){
            $conn = msqli_connect($this->host, $this->user, $this->pass, $this->db);
            mysqli_set_charset($conn, 'utf8');
            if(mysqli_connect_errno){
                echo 'Erro ao tentar conectar com o banco: '. mysqli_connect_error();
            }
            return $conn;
        }
    }
?>