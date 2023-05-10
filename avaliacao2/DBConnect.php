<?php

class DBConnect { 
    private $servername = "localhost"; 
    private $username = "root";
    private $password = "";
    private $dbname="books";
    private $conn;
    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }

    public function inserir_autor($nome, $sobrenome){
        try {
            $sql = "INSERT INTO vestibular (firstname, lastname) VALUES ('". $nome . "', '" . $sobrenome . "')";
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }
}




?>