
<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Trilhas Adventure</title>
        <link href="Inc/desktop.css" rel="stylesheet" type="text/css"/>
       
        <script src="Libs/jquery.js" type="text/javascript"></script>
        <link href="Inc/popup.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
        
         <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
        <link href="Libs/bootstrap.css" rel="stylesheet" type="text/css"/>
        
        <script> 
           $(document).ready(function(){
                $(".btnabrir").click(function(){
                    $(".popup-background").fadeIn('slow');
                });          
          });


        </script>
        
        
    </head>
    <body>
        <div class="lmi-linha"></div>
        <div class="h-full">
            <div class="h-center">
                <div class="menu-linha">
                    <div class="menu-participar">
                        <button class="btnabrir">Participar</button>
                    </div>
                </div>
                <?php
                  include 'Views/containerPopup.php';
                ?>
               
              
            </div>
        </div>
        <div class="b-full">
            <div class="b-center">
                 
               
                
            </div>
        </div>
        
        
        
        
    </body>
</html>
