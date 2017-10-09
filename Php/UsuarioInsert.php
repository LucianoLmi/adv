<?php

include 'Conexao.php';
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));

$celular = $data->celular;
$senha = $data->senha;
$ativo = "1";
$datacad = date("Y/m/d");
$tipo = "1";


 
$q = "INSERT INTO `usuario`(`celular`, `senha`, `ativo`, `datacad`, `tipo`)  VALUES (:celular, :senha, :ativo, :datacad, :tipo)";

$query = $pdo->prepare($q);

$execute = $query->execute(array(
	":celular" => $celular,
	":senha" => $senha,
	":ativo" => $ativo,
         ":datacad" => $datacad,
         ":tipo" => $tipo
));

echo json_encode($datacad);
