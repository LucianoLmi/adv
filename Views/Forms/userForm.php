<div ng-controller="userCtrl"> 
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
</div>