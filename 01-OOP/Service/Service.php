<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'Model/Usuario.php';

$user = new Usuario();
$user->setNome = 'eun';
$user->setDade = '32';

echo sentence();