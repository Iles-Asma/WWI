"use strict";

$(function(){
        $(".button-visit").on("click",function(){  
            buttonVisit();
        });
});

function buttonVisit () {
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
};