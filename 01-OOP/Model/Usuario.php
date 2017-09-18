<?php
//include 'Conexao.php';
/**
 * Description of Usuario
 *
 * @copyright (c) year, Luciano Oliveira LmIdeias.com
 */
class Usuario{
    //put your code here
    
   private $ativo;
    private $tipo;
     private $resultado; 
      
      function __construct($ativo, $tipo, $resultado) {
          $this->ativo = "1";
          $this->tipo = "2";
          $this->resultado = $resultado;
      }

      function getAtivo() {
          return $this->ativo;
      }

      function getTipo() {
          return $this->tipo;
      }

      function getResultado() {
          return $this->resultado;
      }

      function setAtivo($ativo) {
          $this->ativo = $ativo;
      }

      function setTipo($tipo) {
          $this->tipo = $tipo;
      }

      function setResultado($resultado) {
          $this->resultado = $resultado;
      }

          
    
    public function Validar2() {
             $ola = 'ola';
        return $ola;

    }   
function Validar() {
         $at = $this->ativo;
         $tp = $this->tipo;
         
          
        if($at == 1){
            if($tp==1){
                $resultado = 'pagina myadventure';
                }elseif($tp==2){
                $resultado = 'Menu de apoio';
                }elseif($tp==3){
                $resultado = 'Menu de admin';  
                }elseif($tp==4){
                $resultado = 'Menu de root'; 
                }else{
                $resultado = 'Menu de opçoes';
                }
                }else{
            $resultado = 'usuario bloqueado';
            }
            
            return  $resultado;
}
    

}

