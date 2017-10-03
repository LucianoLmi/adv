<?php

include 'Conexao.php';

$pdo = conectar();

$sala = "201";
$vagas = "4";


$buscarusuario=$pdo->prepare("SELECT * FROM `garagem` WHERE `sala` = :sala order by id DESC limit $vagas");
$buscarusuario->bindParam(':sala', $sala);			
$buscarusuario->execute();


while($linha = $buscarusuario->fetch(PDO::FETCH_ASSOC)){
	
	$data[]=$linha;
}

print json_encode($data);
