/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


  $(document).ready(function(){
    $(".btnabrir").click(function(){
        $(".boxbcg").fadeIn('slow');
    });

    $(".btnfechar").click(function(){
        $(".boxbcg").fadeOut('slow');
    });
});
    