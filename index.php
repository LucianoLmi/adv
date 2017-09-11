<?php
// put your code here
print date("Y/m/d");
?>
<!DOCTYPE html>

<html lang="pt-br" ng-app="listaTelefonica">
    <head>
        <meta charset="UTF-8">
        <title>Trilhas Adventure</title>
        <link rel="stylesheet" type="text/css" href="Libs/bootstrap.css">
        <script src="Libs/angular.js"></script>
        <script src="Libs/angular-messages.js"></script>
        <script src="App/App.js"></script>
        <link href="Inc/main.css" rel="stylesheet" type="text/css"/>
    </head>
    <body >
        <div ng-include="'Views/formulario.php'"></div>
        <div ng-include="'Views/mostrar.php'"></div>
		
       
    </body>
</html>
