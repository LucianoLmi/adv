<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teste</title>
    </head>
    <body>
        <?php
       require 'Model/Usuario.php';

          $user = new Usuario();
          echo $user->Validar();
         
        ?>
    </body>
</html>
