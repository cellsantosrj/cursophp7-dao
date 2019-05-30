<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $desenha;
    private $dtcadastro;

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdusuario($valor) {
        $this->idusuario = $valor;
    }

    public function getDeslogin() {
        return $this->deslogin;
    }

    public function setDeslogin($valor) {
        $this->deslogin = $valor;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function setDessenha($valor) {
        $this->desenha = $valor;
    }

    public function getDtcadastro() {
        return $this->dtcadastro;
    }

    public function setDtcadastro($valor) {
        $this->dtcadastro = $valor;
    }

    public function carregarId($id) {
        $sql = new Sql();
        $resultado = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID" => $id
        ));

        if (count($resultado > 0)) {

            $linha = $resultado[0];

            $this->setIdusuario($linha['idusuario']);
            $this->setDeslogin($linha['deslogin']);
            $this->setDessenha($linha['dessenha']);
            $this->setDtcadastro(new DateTime($linha['dtcadastro']));
        }
    }
    
    public function __toString() {
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->deslogin(),
            "dessenha"=>$this->desenha(),
            "dtcadastro"=>$this->dtcadastro()->format("d/m/Y H:i:s")
        ));
    }

}


