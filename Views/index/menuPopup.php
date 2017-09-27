
<?php
   $userTipo = 0;
   
   
   
   
    if(isset($_POST['btnlogar'])){
	$userTipo = 4;       
    }


?>



<div class="boxbcg">
    <div class="">
        <form name="formCad" action="" method="post">
        <div class="boxform">  

             <div class="formheader">
                 <h2>Usuario</h2>  <button class="btnx"> X </button> 
             </div>
             <div class="formbody">
                 
                  
                 
                   <?php
                                       
                    if ($userTipo==1) {
                        echo 'redirecionamento my adventure';//redireção para myadventure
                    }elseif ($userTipo==2) {
                        include 'oper2.php';//menu myadv+apoio
                    }elseif ($userTipo==3) {
                        include 'oper3.php';//menu myadv+apoio+adm
                    }elseif ($userTipo==4) {
                        include 'oper4.php';//menu myadv+apoio+adm+root
                    }elseif ($userTipo==5) {
                        include 'operError.php';//aviso de erro no cadastro ou login
                    } else {
                         include 'operForm.php'; //fica no formlogin 
                    }
   

                  ?>
                              
                 
                 
             </div>
             <div class="formfooter">
                 <button type="submit" class="btnlogar" name="btnlogar">Logar</button><button class="btncad">Cadastrar</button>
             </div>



        </div> 
        </form>
    </div>
</div>
 

