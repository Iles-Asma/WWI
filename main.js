"use strict";

$(function(){  // Fonction principale de la page
        $(".button-visit").on("click",function(){  
            buttonVisit(); //appelle de la fonction buttonVisit au click
        });
});

function buttonVisit () { // fonction buttonVisit qui active l'animation des nuages et qui supprime la div qui contient la page d'introduction
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
    $(".intro-div").addClass("accueilEnd");
    $("title").text("Bienvenue sur WWI !");
    setTimeout(function(){
        $(".intro-div").remove();
    }, 4000);

};