<?php

function conectar(){
   try
   {
     
      $pdo = new PDO("mysql:host=localhost;dbname=unicenter","root","");
   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }

   return $pdo;
}