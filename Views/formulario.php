<div class="jumbotron" ng-controller="cadCtrl">
            <form name="contatoForm">
                    <input class="form-control" type="text" ng-model="usuario.celular" name="Celular" placeholder="Nome" />
                    <input class="form-control" type="text" ng-model="usuario.senha" name="Senha" placeholder="Celular" />                   
            </form>
    <br>
    <h2> {{error}}</h2>
    <br>

            <button class="btn btn-primary btn-block" ng-click="cadastrarUsuario(usuario)" >Cadastrar</button>
           
            <h2>{{mensagem}}</h2>
</div>