<?php

require_once ("./config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/


$verDados = new Usuario();

$verDados->carregarId(3);

echo $verDados;












