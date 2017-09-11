<?php
// put your code here
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
        <style>
		.jumbotron {
			width: 400px;
			text-align: center;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
                        padding: 20px;
		}
		h3 {
			margin-bottom: 30px;
		}
		.table {
			margin-top: 20px;
		}
		.form-control {
			margin-bottom: 5px;
		}
		.selecionado {
			background-color: yellow;
		}
		.negrito {
			font-weight: bold;
		}
	</style>
    </head>
    <body >
        <div ng-include="'Views/formulario.php'"></div>
        <div ng-include="'Views/mostrar.php'"></div>
		
       
    </body>
</html>
