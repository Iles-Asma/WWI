"use strict";

$(function(){
        $(".button-visit").on("click",function(){  
            buttonVisit();
        });
});

function buttonVisit () {
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
    $(".intro-div").addClass("accueilEnd");
    $("title").text("Bienvenue sur WWI !");
    setTimeout(function(){
        $(".intro-div").remove();
    }, 4000);
    console.log("test");
};