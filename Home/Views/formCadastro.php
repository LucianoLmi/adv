<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
         
    <link href="../Css/formCadastro.css" rel="stylesheet" type="text/css"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Concert+One" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
   <script src="../Js/jquery.maskedinput.js" type="text/javascript"></script>
   <script src="../Js/jqMask.js" type="text/javascript"></script>
   <script src="../Js/formCadastro.js" type="text/javascript"></script>
   

</head>

<body class="body" ng-app="cadastroApp">
    


 <div class="form-container-header">        
      <div class="linha-header" >          
          <a href="../index.php" class="">X</a>
      </div>
 </div>






   <div class="form-container">        
     
<!-- FORMULARIO USUARIO -->

<div class="linha-box-form" id="usuario"> 

           <div class="header-usuario">
                <h3>Usuario</h3>                
                 
           </div>

            <div class="form-body">
                 <form class="">

                <input type="text" class="form-control" ng-model="usuario.celular" ng-pattern="/^\d{1,10}$/" required="required" placeholder="Celular" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Senha" />     
                <br>                

                <button class="btn btn-primary btn-block">Logar</button> 
                <button class="btn btn-secondary btn-block" ng-click="cadastrarUsuario(usuario)">Cadastrar</button> 
                   <br> 
                </form>
            </div>
</div>

<!-- FORMULARIO TERMO  -->

<div class="linha-box-form" id="termo"> 

           <div class="header-termo">
                <h3>Termo de Inscrição</h3>                

           </div>

            <div class="form-body">
                 <form class="">

                <label >Item 01 - sistema</label>
               <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p><br>
                 <label >Item 02 - usuarios</label>   
               <p>de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. </p><br>
                   <label >Item 03 - puniçoes</label>
               <p>Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
               <br>
                <div class="form-check">
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    Concordo com todos os itens do termo.
                    </label>
                </div>
               <br>

                 <div class="form-group">
                    <button type="submit" class="btn btn-danger">Salvar</button>
                </div>

                </form>
            </div>
</div>


<!-- FORMULARIO PESSOA -->

<div class="linha-box-form" id="pessoa"> 

           <div class="header-pessoa">
                <h3>Pessoa</h3>                

           </div>

            <div class="form-body">
                 <form  class="">

               <input type="text" class="form-control" ng-model="usuario.celular"  required="required" placeholder="Nick Name" /><br> 
                <hr>
               <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Nome" />  <br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Sobre Nome" /> <br>
                <hr>

                <label for="exampleFormControlSelect1">Data de nascimento</label> <br>
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Data nascimento" /> <br>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Estado Civil</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Solteiro(a)</option>
                        <option>Casada(o)</option>
                        <option>Namorando</option>
                        <option>No Tinder</option>                   
                    </select>
                </div>

                <br>


                <button class="btn btn-success btn-block">Salvar</button> 
                </form>
            </div>
</div>       




<!-- FORMULARIO IDENTIFICAÇÃO -->



<div class="linha-box-form" id="identificacao"> 

           <div class="form-header">
                <h3>Identificação</h3>                
               <br>                
                 <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p>

           </div>

            <div class="form-body">
                 <form class="">

                <input type="text" class="cptxt form-control" ng-model="usuario.celular"  required="required" placeholder="RG/CPF/CNH" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Número" />  <br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Orgão Expedição" /> <br>
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Data Expedição" /> <br>
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="UF" /> <br>
                <button class="btn btn-success btn-block">Salvar</button> 

                </form>
            </div>
</div>


<!-- FORMULARIO ENDEREÇO -->



<div class="linha-box-form" id="endereco"> 

           <div class="form-header">
                <h3>Endereço</h3>                
               <br>                
                 <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p>

           </div>

            <div class="form-body">
                 <form class="">

                <input type="text" class="cptxt form-control" ng-model="usuario.celular"  required="required" placeholder="Bairro" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Cidade" />  <br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Estado" /> <br>
                <button class="btn btn-success btn-block">Salvar</button> 

                </form>
            </div>
</div>

<!-- FORMULARIO CONTATOS -->



<div class="linha-box-form" id="contatos"> 

           <div class="form-header">
                <h3>Contatos</h3>                
               <br>                
                 <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p>

           </div>

            <div class="form-body">
                 <form class="">

                <input type="text" class="cptxt form-control" ng-model="usuario.celular"  required="required" placeholder="Nome" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Telefone" />  <br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Email" /> <br>
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Descrição" /> <br>
                <button class="btn btn-success btn-block">Salvar</button> 

                </form>
            </div>
</div>

<!-- FORMULARIO SAUDE -->

<div class="linha-box-form" id="saude"> 

           <div class="form-header">
                <h3>Saúde</h3>                
               <br>                
                 <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p>

           </div>

            <div class="form-body">
                 <form class="">

                <input type="text" class="cptxt form-control" ng-model="usuario.celular"  required="required" placeholder="Nome" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Telefone" />  <br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Email" /> <br>
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Descrição" /> <br>
                <button class="btn btn-success btn-block">Salvar</button> 

                </form>
            </div>
</div>

<!-- FORMULARIO EXPERIENCIA -->

<div class="linha-box-form" id="experiencias" ng-controller="expCtrl"> 

           <div class="form-header">
                <h3>{{titulo}}</h3>                
               <br>                
                 <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p>

           </div>

            <div class="form-body">
                 <form >

                <input type="text" class="cptxt form-control" ng-model="tr.nome"  required="required" placeholder="Nome da Trilha" /><br> 
                <input type="text" class="cptxt form-control" id="tdata" ng-model="tr.tdata" required="required" placeholder="Data" /><br> 
                <button class="btn btn-success btn-block">Salvar</button> 

                </form>
              
                
                
            </div>
      
                 <div class="form-lista-exp">
                     <h5>Minhas Aventuras</h5>                
                  <br>                
                  <table class="table table-striped">
                      <tr>
                          <th>Nome</th>
                          <th>Data</th>
                      </tr>
                      <tr ng-repeat="tr in trilhas">
                          <td>{{tr.nome}}</td>
                          <td>{{tr.tdata | date:'dd/MM/yyyy'}}</td>
                      </tr>
                  </table>
                 </div>
</div>


   </div> 














  
    

</body>

</html>
