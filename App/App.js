angular.module("listaTelefonica", []);
		


angular.module("listaTelefonica").controller("cadCtrl", function ($scope, $http) {
   
  
    $scope.cadUsuario = function (usuario) {            
        usuario.data = new Date();
        $http.post("Php/UsuarioInsert.php", usuario).success(function(data){
             delete $scope.usuario;
            $scope.contatoForm.$setPristine();      
        });
                 
    };
   
 });
 
 
angular.module("listaTelefonica").controller("mostrarCtrl", function ($scope, $http) {
   
    $http.get("Php/Buscar.php").success(function(data){            
            $scope.usuarios = data;
        }).error(function(data, status){
            $scope.mensagem = "error";
        });
      
 });