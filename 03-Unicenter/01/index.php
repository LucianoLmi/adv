<?php
    
   
    if(isset($_POST['btnGaragem'])){       
            header('location: garagem.php');  
      
    }
    
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link href="02menu.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
         <div class="lmi-linha"></div>
        
         
          <div class="h-full">
            <div class="h-center">
                <div class="m-barra">
                    
                     <div class="m-01"></div>
                      <div class="m-02">UNICENTER 433</div>
                       <div class="m-voltar"></div>
                </div>
                
                
            </div>
        </div>
        <div class="b-full">
            <div class="b-center">
                 
                  
                <div class="container-center">
                     <form name="" action="" method="post">
                    <button type="submit" class="menuop" name="btnGaragem"><h3>Garagem</h3></button>
                    <button type="submit" class="menuop" name="btnlogar"><h3>Manutenção</h3></button>
                    <button type="submit" class="menuop" name="btnlogar"><h3>Autorização</h3></button>
                    <button type="submit" class="menuop" name="btnlogar"><h3>Funcionarios</h3></button>
                     </form>
                </div>
                
            </div>
        </div>
        
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
      
       
    </body>
</html>
