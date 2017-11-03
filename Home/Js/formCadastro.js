var app = angular.module("cadastroApp",[ ]);

//------- OPÇOES DO LOGIN ---------------------------------------



app.controller("expCtrl", function ($scope) {   
  
  $scope.titulo =  "Experiência";
  $scope.trilhas = [
      {nome:"Parque lajes gardem",tdata:"20102010"},
       {nome:"Parque lajes gardem",tdata:"20102010"},
       {nome:"Parque lajes gardem",tdata:"20102010"},
       {nome:"Parque lajes gardem",tdata:"20102010"}
  ];   
   
 });