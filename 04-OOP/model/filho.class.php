<?php

/**
 * Description of filho.class
 *
 * @copyright (c) year, Luciano Oliveira Lmideias.com
 */
class filho extends Pai{
    private $num3;
    
    function __construct($num3, $num1, $num2) {      
        parent::__construct($num1,$num2);
        $this->num1 = $num1;
         $this->num2 = $num2;
        $this->num3 = $num3;
    }

    
    
        
     public function getNum3() {
        return $this->num3;
    }
    
     public function Divide() {
        
        $val1 = $this->num1;
        $val2 = $this->num2;
        $val3 = $this->num3;
        $rest = ($val1+$val2)/$val3;      
        
        return $rest;
    }
     

}
