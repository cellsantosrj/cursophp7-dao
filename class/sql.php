<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {
        $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    }

    private function setDados($declaracao, $parametros = array()) {

        foreach ($parametros as $chave => $valor) {

            $this->setDado($chave, $valor);
        }
    }

    private function setDado($declaracao, $chave, $valor) {

        $declaracao->bindParam($chave, $valor);
    }

    public function query($linhaDados, $dados = array()) {
        
        $stmt = $this->conn->prepare($linhaDados);
        
        $this->setDados($stmt, $dados);
        
        $stmt->execute();
        
        return $stmt; 
    }
    
    public function select($linhaDados, $parametros = array()):array{
        
        $stmt = $this->query($linhaDados, $parametros);
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
