

<script> 
$(document).ready(function(){
    $("#btnx").click(function(){
    $(".popup-background").fadeOut('slow');
    });
});


</script>


<script> 

var app = angular.module("mainApp", []);
app.controller("cadCtrl", function ($scope, $http) {   
  
  $scope.titulo = "Usuario";
  
   $scope.cadastrarUsuario = function(usuario){            
        
        usuario.response = new Date();
        
        $http.post("Php/Inserir.php", usuario).then(function(response){
           
        if(response.data.sucesso == 'ok'){
             //$scope.resultado = response.data;  
              alert('cadastrado');
             delete $scope.usuario;
            $scope.usuarioForm.$setPristine();
        }else{
            alert('erro');
        }
        
             
                       
             
        }).then(function(response) {
            $scope.showErro = !$scope.showErro;            
            $scope.resultado = response.data.error;
             alert('erro em tudo');
        });   
    };
   
   
 });
 
 


</script>




<div class="popup-background" ng-app="mainApp" >                  
   <div class="popup-container" ng-controller="cadCtrl">                  
       
       
       <div class="popup-form" ng-show="!showForma"> 
            
           
           <div class="pfl-x">
                <input type="submit" id="btnx" name="btnx" value="X" />
           </div>
            <div class="pfl-user">
                 <h2>{{titulo}}</h2>  
           </div>
          
           <form name="usuarioForm" class="p-form">
           
                <input type="text" class="form-control" ng-model="usuario.celular" ng-pattern="/^\d{1,10}$/" required="required" placeholder="Celular" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Senha" />     
                <br>
                

                <button class="btn btn-primary btn-block">Logar</button> 
                <button class="btn btn-primary btn-block" ng-click="cadastrarUsuario(usuario)">Cadastrar</button> 
            </form>
           
           <h3>{{teste}}</h3>
           
           <div class="pfl-infor" ng-show="showErro" >
                <div class="alert alert-danger" >
                    <p>{{resultado}}</p>  
                </div>
           </div>
           
           
      </div>
       
       
       
       
       
       
       
       
       
       <div class="popup-form" ng-show="showFormb"> 
            
           
           <div class="pfl-x">
                <input type="submit" id="btnx" name="btnx" value="X" />
           </div>
            <div class="pfl-user">
                 <h2>Pessoa</h2>  
           </div>
          
           <form name="usuarioForm" class="p-form">
           
                <input type="text" class="form-control" ng-model="usuario.celular" ng-pattern="/^\d{1,10}$/" required="required" placeholder="Celular" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Senha" />     
                <br>
                

                <button class="btn btn-primary btn-block">Logar</button> 
                <button class="btn btn-primary btn-block" ng-click="cadastrarUsuario(usuario)">Cadastrar</button> 
            </form>
           
               
           
           <div class="pfl-infor" ng-show="showErro" >
                <div class="alert alert-danger" >
                    <p>{{resultado}}</p>  
                </div>
           </div>
           
           
      </div>
   </div>
    
    
    
    
  
</div>