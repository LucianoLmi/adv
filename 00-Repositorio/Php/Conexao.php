<?php

function conectar(){
   try
   {
     
      $pdo = new PDO("mysql:host=localhost;dbname=informa","root","");
   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }

   return $pdo;
}