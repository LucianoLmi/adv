angular.module("listaTelefonica", []);
		


angular.module("listaTelefonica").controller("cadCtrl", function ($scope) {
   
  
    $scope.cadUsuario = function (usuario) {
            $scope.usuarios.push(angular.copy(usuario));
            delete $scope.usuario;
            $scope.contatoForm.$setPristine();
    };
   
 });
 
 
angular.module("listaTelefonica").controller("mostrarCtrl", function ($scope) {
   
    $scope.usuarios = [
            {nome: "Pedro", celular: "99998888", cor: "blue"},
            {nome: "Ana", celular: "99998877", cor: "yellow"},
            
    ];
      
 });