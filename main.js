"use strict";

$(function(){
        $(".button-visit").on("click",function(){  
            buttonVisit();
        });
});

function buttonVisit () {
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
    $(".main-div").addClass("accueilEnd")
    setTimeout(function(){
        $(".main-div").remove();
        $("title").text("Bienvenue sur WWI !");
    }, 4000);
    console.log("test");
};