

<script> 
$(document).ready(function(){
    $("#btnx").click(function(){
    $(".popup-background").fadeOut('slow');
    });
});


</script>


<script> 

var app = angular.module("mainApp", ['ngRoute']);
app.config(['$routeProvider', function($routeProvider){
    $routeProvider
        .when('/home',{
           templateUrl: 'Views/Forms/userForm.php' ,
           controller:'userCtrl'
        })
        
        .when('/login',{
            templateUrl: 'Views/Forms/menuApoio.php'
        })        
        
        .when('/user',{
             //template:'<strong>Aqui besta</strong>'
         redirectTo: function(){    
                  alert("sorry, nao encontrado");
                  return '/';
         }
        })
        .otherwise({ 
            redirectTo: '/home'
    })
    
}]);



//----------------------------------------------------



app.controller("userCtrl", function ($scope, $http, $location) {   
  
  $scope.titulo = "Usuario";  
   $scope.cadastrarUsuario = function(usuario){            
        
        usuario.response = new Date();
        
        $http.post("Php/Inserir.php", usuario).then(function(response){
           
               if(response.data.sucesso == 'ok'){
                   delete $scope.usuario;
                   $scope.usuarioForm.$setPristine();
                   $location.path('/login');
               }else{            
                   alert('O número digitado já está cadastrado, digite outro');
               }
            
        }).then(function() {           
            // alert('Erro no sistema, tente mais tarde.');
            
        });   
    };  
   
 });


//------- OPÇOES DO LOGIN ---------------------------------------



app.controller("oplogCtrl", function ($scope) {   
  
  $scope.titulo = "Usuario Apoio";  
   
   
   
 });



</script>













<div class="popup-background" ng-app="mainApp">                  
    <div class="popup-container" >    
        <div class="popup-container-x" >    
              <input type="submit" id="btnx" name="btnx" value="X" />
         </div>    
        
        <div class="container-forms" ng-view>
             
        </div> 
   </div>     
</div>