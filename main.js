"use strict";

$(function(){
        $(".button-visit").on("click",function(){  
            buttonVisit();
        });
});

function buttonVisit () {
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
    setTimeout(function(){
        $(".main-div").remove();
    }, 3250);
    console.log("test");
};