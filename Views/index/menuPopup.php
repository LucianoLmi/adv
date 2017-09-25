
<?php
   $oper5 = 1;
   
    if(isset($_POST['btnlogar'])){
	$oper5 = 4;       
    }


?>


<script src="cadlogin.js" type="text/javascript"></script>


<div class="boxbcg">
    <div class="">
        <form name="formCad" action="" method="post">
        <div class="boxform">  

             <div class="formheader">
                 <h2>Usuario</h2>  <button class="btnx"> X </button> 
             </div>
             <div class="formbody">
                 
                  
                 
                   <?php
                                       
                    if ($oper5==5) {
                        include 'oper5.php';
                    }elseif ($oper5==4) {
                        include 'oper4.php';
                    }elseif ($oper5==3) {
                        include 'oper3.php';
                    }elseif ($oper5==2) {
                        include 'oper2.php';
                    }elseif($oper5==1){
                       include 'oper1.php';  
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