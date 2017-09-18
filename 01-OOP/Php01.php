<?php

/**
 * Description of Php01
 *
 * @copyright (c) year, Luciano Oliveira LmIdeias.com
 */
class Php01 {
    //put your code here
    public $valor1;
    public $valor2;
    public $resultado;
    
    protected $items = [];
    
    
    public function add($value) {
        $this->items[]= $value;
    }
    
    
    
    public function retorno($valor1, $valor2) {          
        $resultado = $valor1 + $valor2;  
        return $resultado;
    }
    
      public function validar($valor1, $valor2) {          
        
        
        if($valor1 == 1){
              if($valor2 == 1){
                    $resultado = 10;
               }else{
                   $resultado = 5;
               }    

        }else{
            $resultado = 0;
        }    
        
        
        return $resultado;
    }
    
    
    public function set($key, $value) {
        $this->items[$key] = $value;
    }
    
    public function toJson() {
        return json_encode($this->items);
    }
     public function count() {
        return count($this->items);
    }
}
