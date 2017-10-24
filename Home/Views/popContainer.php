
<link rel="stylesheet" href="popContainer.css">


<div class="popup-background" >                  
   <div class="popup-container">            

       <div class="linha-header" >       
               <input type="submit" class="btnx" value="X" />
      </div>
         
        <div class="linha-usuario" >   
            
                 <h3>Usuario</h3>
                 <br>
                 <br>
                 <form name="usuarioForm" class="">
           
                <input type="text" class="form-control" ng-model="usuario.celular" ng-pattern="/^\d{1,10}$/" required="required" placeholder="Celular" /><br> 
                <input type="text" class="form-control" ng-model="usuario.senha"  required="required" placeholder="Senha" />     
                <br>                

                <button class="btn btn-primary btn-block">Logar</button> <br>
                <button class="btn btn-secondary btn-block" ng-click="cadastrarUsuario(usuario)">Cadastrar</button> 
            </form>
           
          
       </div>
       
       <div class="linha-termo" >       
            
               <h3>Termo de Inscrição</h3>
               <br>
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
       </div>
       
       
       
       
       
       
       
       <div class="linha-pessoa" >       
                <h3>Pessoa</h3>
                
               <br>
                 <br>
                 <form name="usuarioForm" class="">
           
                <input type="text" class="form-control" ng-model="usuario.celular"  required="required" placeholder="Nick Name" /><br> 
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
       <div class="linha-aviso" >       
            
               
               <h3>Atenção</h3>
               <br>
               
               <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja</p><br>
                 
               <p>de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. </p><br>
                  
               <p>Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
               <br>
               
               <br>
               
                 <div class="form-group">
                    <button type="submit" class="btn btn-warning">Seguir</button>
                </div>
          
       </div>
       
       
   </div> 
</div>