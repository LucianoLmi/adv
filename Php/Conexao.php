<?php

function conectar(){
   try
   {
      //$pdo = new PDO("mysql:host=localhost;dbname=advdata","root","root");
      $pdo = new PDO("mysql:host=localhost;dbname=database","root","root");
   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }

   return $pdo;
}