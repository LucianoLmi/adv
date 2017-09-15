<?php
// put your code here
?>
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Administração</title>
        <link href="Includes/mobile.css" rel="stylesheet" type="text/css"/>
        <script src="Includes/jquery.js" type="text/javascript"></script>
        <script src="Includes/main.js" type="text/javascript"></script>
        
    </head>
    <body>
        <div class="lmi-linha"></div>
        <div class="h-full">
            <div class="h-center">
                 <div class="menu-linha">
                    <div class="m-box-a">
                      
                    </div>
                      <div class="m-box-b">
                      
                    </div>
                      <div class="m-box-c">
                      <button class="btnabrir">abrir</button>
                    </div>
                     
                    
                </div>
            </div>
        </div>
        <div class="b-full">
            <div class="b-center">
                 
                <?php
                   include 'Views/menuPopup.php';
                ?>
                
            </div>
        </div>
    </body>
</html>
