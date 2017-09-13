<div class="jumbotron" ng-controller="loginCtrl">
            <form name="contatoForm">
                <input class="form-control" type="text" id="celular" ng-model="celular" name="Celular" placeholder="Nome" />
                <input class="form-control" type="text" id="senha" ng-model="senha" name="Senha" placeholder="Celular" />                   
            </form>
    <br>
  
    <br>

            <button class="btn btn-primary btn-block" ng-click="logar()" >Logar</button>
           
           
</div>