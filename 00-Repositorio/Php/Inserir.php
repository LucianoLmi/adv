<?php
include ('Conexao.php');
$pdo = conectar();


session_start();


$nome = "jiraya";


//Prepara o Cadastro
 
$cadastrar=$pdo->prepare("INSERT INTO `usuario`(`nome`)  VALUES (:nome)");
$cadastrar->bindValue(":nome",$nome);


//valida os dados

$validar=$pdo->prepare("SELECT * FROM usuario WHERE nome=?");
$validar->execute(array($nome));

if( $validar->rowCount() == 0):   
	$cadastrar->execute(); 	

    $_SESSION['usuarioid'] = $pdo->lastInsertId();

    print $pdo->lastInsertId();

else:   
	
        echo "erro";
endif;



?>