
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
                

                <button class="btn btn-primary btn-block">Logar</button> 
                <button class="btn btn-primary btn-block" ng-click="cadastrarUsuario(usuario)">Cadastrar</button> 
            </form>
           
          
       </div>
       
       <div class="linha-termo" >       
            
                 <h3>Termo de Inscrição</h3>
               <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
               
          
       </div>
       
       <div class="linha-termo" >       
           
                 <h3>Pessoa</h3>
               <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
          
          
       </div>
       
       
   </div> 
</div>