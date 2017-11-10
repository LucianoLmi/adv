<?php

include '';
include_once '';

/**
 * Description of Pai.class
 *
 * @copyright (c) year, Luciano Oliveira Lmideias.com
 */
class Pai {

    private $num1;
    private $num2;
    
    function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    
    public function getNum1() {
        return $this->num1;
    }
    
    public function Soma() {        
        $val1 = $this->num1;
        $val2 = $this->num2;      
        $rest = $val1+$val2; 
        
        return $rest;
    }
    
   
    
}
