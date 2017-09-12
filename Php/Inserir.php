<?php
include ('Conexao.php');
$pdo = conectar();


$data = json_decode(file_get_contents("php://input"));


$celular = $data->celular;
$senha = $data->senha;
$ativo = "1";
$datacad = "20170911";
$tipo = "1";

//Prepara o Cadastro
 
$cadastrar=$pdo->prepare("INSERT INTO `usuario`(`celular`, `senha`, `ativo`, `datacad`, `tipo`)  VALUES (:celular, :senha, :ativo, :datacad, :tipo)");
$cadastrar->bindValue(":celular",$celular);
$cadastrar->bindValue(":senha",$senha);
$cadastrar->bindValue(":ativo",$ativo);
$cadastrar->bindValue(":datacad",$datacad);
$cadastrar->bindValue(":tipo",$tipo);

//valida os dados

$validar=$pdo->prepare("SELECT * FROM usuario WHERE celular=?");
$validar->execute(array($celular));

if( $validar->rowCount() == 0):   
	$cadastrar->execute();  
	echo "<script>alert('Cadastrado com sucesso');</script>";
else:   
	echo "<script>alert('Numero ja cadastrado.');</script>";   
endif;

echo json_encode($celular);

?>