<?php
include ('Conexao.php');
$pdo = conectar();


session_start();


$celular = "223341";
$usuarioid = $_SESSION['usuarioid'];

//Prepara o Cadastro
 
$cadastrar=$pdo->prepare("INSERT INTO `contato`(`celular`,`usuarioid`)  VALUES (:celular, :usuarioid)");
$cadastrar->bindValue(":celular",$celular);
$cadastrar->bindValue(":usuarioid", $usuarioid);
$cadastrar->execute();

echo $cadastrar->rowCount();


?>