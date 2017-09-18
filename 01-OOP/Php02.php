<?php
/*
include 'Conexao.php';

$pdo = conectar();
 
$id= "3";

$buscarusuario =$pdo->prepare("SELECT * FROM `usuario` WHERE usuarioid = :usuarioid");
$buscarusuario->bindValue(":usuarioid", $id);
$buscarusuario->execute();
$linha = $buscarusuario->fetch(PDO::FETCH_ASSOC);

print json_encode($linha);

$ativo = $linha['ativo'];
$tipo = $linha['tipo'];

*/

$ativo = "0";
$tipo = "1";
$resultado;


 echo '<br>';
echo '------------------------------';
echo '<br>';

if($ativo==1){
   if($tipo==1){
        $resultado = 'pagina myadventure';
     }elseif($tipo==2){
       $resultado = 'Menu de apoio';
    }elseif($tipo==3){
        $resultado = 'Menu de admin';  
    }elseif($tipo==4){
        $resultado = 'Menu de root'; 
    }else{
        $resultado = 'Menu de opçoes';
    }
}else{
    $resultado = 'usuario bloqueado';
}

echo $resultado;