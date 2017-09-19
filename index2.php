<?php
// put your code here
print date("Y/m/d");
?>
<!DOCTYPE html>

<html lang="pt-br" ng-app="mainApp">
    <head>
        <meta charset="UTF-8">
        <title>Trilhas Adventure</title>
        <link rel="stylesheet" type="text/css" href="Libs/bootstrap.css">
        <script src="Libs/angular.js"></script>
        <script src="Libs/angular-messages.js"></script>
      
        
        <link href="Inc/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body >
        <div ng-include="'Views/cadloginform.php'"></div>
        <div ng-include="'Views/formulario.php'"></div>
        <div ng-include="'Views/mostrar.php'"></div>
         <div ng-include="'Views/login.php'"></div>
	  <script src="Libs/angular-router.js" type="text/javascript"></script>
        <script src="App/loginApp.js" type="text/javascript"></script>	
       
    </body>
</html>
