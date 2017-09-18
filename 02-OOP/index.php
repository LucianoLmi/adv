
 <?php
       require_once 'Usuario.class.php';
      $objUser = new Usuario();
      
      if(isset($_POST['btLogar'])){
	$objUser->Logar($_POST);
      }
      
      if(isset($_POST['btCadastrar'])){
           if($objUser->CadastrarUsuario($_POST) == 'ok'){
                  header('location: index.php');
                  echo '<script type="text/javascript">alert("Cadastrado");</script>';
            }else{
               echo '<script type="text/javascript">alert("O Numero já é Cadastrado");</script>';
            }
        }
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>teste dois</title>
    </head>
    <body>
        
        
        
   <div id="formulario">
    <form name="formCad" action="" method="post">
    	<label>Celular: </label><br>
        <input type="text" name="celular" required="required" ><br>      
        
        
        <label>Senha: </label><br>
        <input type="password" name="senha" required="required"><br>       
        
        <br>
        <input type="submit" name="btCadastrar" value="Cadastrar">
      
    </form>
</div>     
        
        
        
        
        
        
<div id="areaLogin">
    <form action="" method="post">
            <div class="form-group">
            <div class="input-group">                    
                    <input type="text" name="celular"  placeholder="Celular" required="required" >
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">               
                <input type="password" name="senha" class="form-control" placeholder="Senha">
            </div> 
        </div>
        <div class="form-group">
            <button type="submit" name="btLogar" class="btn btn-primary btn-block">Logar</button> 
        </div>
    </form>
    
    <?php if($_GET["login"] == "error"){ ?>
    <div class="alert alert-danger alert-block alert-aling" role="alert">Ops! E-mail ou Senha estão errado</div>
    <?php } ?>
    
</div>

        
       
<table class="table">
    <tr>
            <th></th>
            <th>Usuario Id</th>
            <th>Celular</th>
            <th>Senha</th>
            <th>Ativo</th>
            <th>Data</th>
            <th>Tipo</th>

    </tr>
     <?php foreach($objUser->BuscarTudo() as $rst){ ?>
    <tr >
            <td><input type="checkbox"/></td>
            <td><?=($rst['usuarioid'])?></td>
            <td><?=($rst['celular'])?></td>
            <td><?=($rst['senha'])?></td>
            <td><?=($rst['ativo'])?></td>
            <td><?=($rst['datacad'])?></td>
             <td><?=($rst['tipo'])?></td>
    </tr>
     <?php } ?>
</table>


    </body>
</html>
