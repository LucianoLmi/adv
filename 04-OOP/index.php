<?php
include 'model/User.php';

?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            .base{padding: 50px; margin: 20px; background-color: #ccc;}
        </style>
    </head>
    <body>
        
        
    <?php
        $user = new User();
        
        if(isset($_POST['btnAdd'])){
           if($user->Adicionar($_POST) == 'ok'){                 
                  echo '<script type="text/javascript">alert("Cadastrado");</script>';
            }else{
               echo '<script type="text/javascript">alert("O Numero já é Cadastrado");</script>';
            }
        }

    ?>  
        
   
        <form action="" class="base" method="post">
    	<label>Nome: </label><br>
        <input type="text" name="nome" ><br>     
        <label>Idade: </label><br>
        <input type="text" name="idade" ><br>       
        <br>
        <input type="submit" name="btnAdd" value="Add">
      
    </form>
        
        
        
        
        
        
    <table class="base">
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>


        </tr>
        <?php foreach($user->Listar() as $rst){ ?>
        <tr >
            <td><input type="checkbox"/></td>
            <td><?=($rst['userid'])?></td>
            <td><?=($rst['nome'])?></td>
            <td><?=($rst['idade'])?></td>

        </tr>
        <?php } ?>
    </table>
    </body>
</html>
