<?php

require_once ("./config.php");

/**
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
**/

//carrega um usuario
//$root = new Usuario();
//$root->loadById(4);
//echo $root;

//listar varios usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios peo login
//$search = Usuario::search("i");
//echo json_encode($search);

//carregar usuario via login e senha

//$usuario = new Usuario();
//$usuario->login("Cel", "1219");
//echo $usuario;

//inserir dados no banco
//$aluno = new Usuario("Bruna", "2224");
//$aluno->insert();
//echo $aluno;

//atualizacao de cadastro do usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("João", "2015");
echo $usuario;


































