<?php
 
   
   
   
    if(isset($_POST['btnEntrar'])){
	
        if($_POST["name"] == "g1g2"){
            header('location: 01/index.php');
        }else{
            echo '<script type="text/javascript">alert("Senha Errada");</script>';
        }
        
       
        
    }

?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Unicenter 433</title>
        <link href="01.css" rel="stylesheet" type="text/css"/>
        <link href="01/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="body01">
         <div class="lmi-linha"></div>
        
               <div class="entrar">
                    <form name="formCad" action="" method="post">

                        <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="name" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>

                        <button type="submit" name="btnEntrar" class="btn btn-primary">Entrar</button>
                    </form>
               </div>
           
        
    </body>
</html>
