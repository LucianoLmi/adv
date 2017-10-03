<?php
include ('Conexao.php');
$pdo = conectar();


$placa = "ROq2014";
$data = date("Y-m-d");
$hora = date('H:i:s');
$sala = "201";
$tipo = "1";


//Prepara o Cadastro
 
$cadastrar=$pdo->prepare("INSERT INTO `garagem`(`placa`, `data`, `hora`, `sala`, `tipo`)  VALUES (:placa, :data, :hora, :sala, :tipo)");
$cadastrar->bindValue(":placa",$placa);
$cadastrar->bindValue(":data",$data);
$cadastrar->bindValue(":hora",$hora);
$cadastrar->bindValue(":sala",$sala);
$cadastrar->bindValue(":tipo",$tipo);

if( $cadastrar->execute()):   	  
	echo "<script>alert('Cadastrado com sucesso');</script>";
else:   
	echo "<script>alert('Erro');</script>";   
endif;


?>