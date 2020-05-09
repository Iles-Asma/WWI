"use strict";

$(function(){
        $(".button-visit").on("click",function(){  
            buttonVisit();
        });
});

function buttonVisit () {
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
    $(".main-div").addClass("accueilEnd");
    $("title").text("Bienvenue sur WWI !");
    setTimeout(function(){
        $(".main-div").remove();
    }, 4000);
    console.log("test");
};