<div class="jumbotron" ng-controller="cadCtrl">
            <form name="contatoForm">
                    <input class="form-control" type="text" ng-model="usuario.nome" name="nome" placeholder="Nome" />
                    <input class="form-control" type="text" ng-model="usuario.celular" name="celular" placeholder="Celular" />                   
            </form>
    <br>
    <h2> {{error}}</h2>
    <br>

            <button class="btn btn-primary btn-block" ng-click="cadUsuario(usuario)" >Cadastrar</button>
           
            <h2>{{mensagem}}</h2>
</div>