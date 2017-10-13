<?php
include ('Conexao.php');
$pdo = conectar();


session_start();


$snome = "jaspio";
$usuarioid = $_SESSION['usuarioid'];

//Prepara o Cadastro
 
$cadastrar=$pdo->prepare("INSERT INTO `pessoa`(`snome`,`usuarioid`)  VALUES (:snome, :usuarioid)");
$cadastrar->bindValue(":snome",$snome);
$cadastrar->bindValue(":usuarioid", $usuarioid);
$cadastrar->execute();

echo $cadastrar->rowCount();


?>