angular.module("listaTelefonica", []);
		


angular.module("listaTelefonica").controller("cadCtrl", function ($scope, $http) {
   
  
    $scope.cadastrarUsuario = function(usuario){            
        usuario.data = new Date();
        $http.post("Php/Inserir.php", usuario).success(function(){
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