var app = angular.module("mainApp", ['ngRoute']);
		


app.config(function ($routeProvider) {
  $routeProvider
    .when('/',{
        templateUrl:'index.php'
    })

    .when('/Admin',{
        //templateUrl:'Admin/index.php'
       
    })


    .when('/MyAdv',{
               
        
      
        resolve:{
            "check":function($window, $rootScope){
                if(!$rootScope.loggedIn){
                    $window.location.href = 'index.php';
                }
            }
        },
        templateUrl:'MyAdv/index.php'
     
    })
    
    .otherwise({
        redirectTo:'/'
    });
   
 });
 
 app.controller('loginCtrl', function($window, $scope, $rootScope){
    
     $scope.logar = function(){
        
        if($scope.celular == '123' && $scope.senha == '321' ){
           
             $rootScope.loggedIn = false;           
             $window.location.href = 'MyAdv/index.php';
        }else{
            alert("erro");
        }
     
     };
     
 });
 
 
 
 /*=====================================================================*/
 
 
 
 app.controller("cadCtrl", function ($scope, $http) {
   
  
    $scope.cadastrarUsuario = function(usuario){            
        usuario.data = new Date();
        $http.post("Php/Inserir.php", usuario).success(function(){
             delete $scope.usuario;
            $scope.contatoForm.$setPristine();      
        });
                 
    };
   
 });
 
 
app.controller("mostrarCtrl", function ($scope, $http) {
   
    $http.get("Php/Buscar.php").success(function(data){            
            $scope.usuarios = data;
        }).error(function(data, status){
            $scope.mensagem = "error";
        });
      
 });
 
