"use strict";

$(function(){  // Fonction principale de la page
        $(".button-visit").on("click",function(){  
            buttonVisit(); //appelle de la fonction buttonVisit au click
        });
        $(".communication").on("mouseover",function(){
            $(this).attr("d","M635.27,562.81c-5.38-34.8,25.28-53.36,75.89-119,73.18-94.9,67.41-131.77,110.08-143.4,43.54-11.86,94.1,14.37,120.78,47.8,47.6,59.66,18.1,141,6.41,173.14C920.75,597.65,846.82,688,773.15,678.6c-33.34-4.24-61.36-28.21-85.51-48.87C660,606.05,639.21,588.31,635.27,562.81Z");
            $(".cls-41").css("fill","white");
            $("#COM").css("transform","translateX(15px)");
        });
        $(".communication").on("mouseleave",function(){
            $(this).attr("d","M635.23,547.27c-5-32.76,23.66-50.24,71-112,68.48-89.34,63.07-124,103-135,40.73-11.17,88,13.53,113,45,44.54,56.16,16.93,132.69,6,163-25.9,71.79-95.07,156.81-164,148-31.19-4-57.4-26.55-80-46C658.33,588,638.92,571.27,635.23,547.27Z");
            $(".cls-41").css("fill","#515151");
            $("#COM").css("transform","translateX(-15px)");
        });

        $(".mmi").on("mouseover",function(){
            $(this).attr("d","M375.47,493.67c-9.85-17.91-9-36.1-8.23-54.53.7-15.79,2.72-61.31,33.94-90.51,19-17.79,39.72-20.95,66.84-25.08,21.64-3.3,81.26-12.38,137.8,25.08C627.58,363,654,380.54,659.3,410.79c8.52,48.5-43.55,93.84-74,112.32-54,32.73-109.07,19.33-134.72,13.09C424.56,529.88,391.56,522.92,375.47,493.67Z");
            $("#txtMmi").css("fill","white");
            $("#MMI").css("transform","translateX(15px)")
        });
        $(".mmi").on("mouseleave",function(){
            $(this).attr("d","M375.23,479.27c-9.58-16.43-8.79-33.11-8-50,.68-14.48,2.64-56.22,33-83,18.5-16.32,38.62-19.21,65-23,21-3,79-11.35,134,23,21.15,13.21,46.83,29.26,52,57,8.29,44.47-42.35,86.05-72,103-52.51,30-106.06,17.72-131,12C423,512.47,390.87,506.09,375.23,479.27Z");
            $("#txtMmi").css("fill","#515151");
            $("#MMI").css("transform","translateX(-15px)")
        });

        $(".audvis").on("mouseover",function(){
            $(".audiovisuel").removeClass("audiovisuel-leave")
            $(".audiovisuel").addClass("audiovisuel-over");
            $("#txtAudio").css({"fill":"white","transition":"fill 0.75s ease"});
            $("#audiovisuel").css({"transform":"translateX(15px)","transition":"transform 0.75s ease"})

        });
        $(".audvis").on("mouseleave",function(){
            $(".audiovisuel").removeClass("audiovisuel-over");
            $(".audiovisuel").addClass("audiovisuel-leave");
            $("#txtAudio").css({"fill":"#515151","transition":"fill 0.75s ease"});
            $("#audiovisuel").css({"transform":"translateX(-15px)","transition":"transform 0.75s ease"})
        });

        $(".design").on("mouseover",function(){
            $(this).attr("d","M191.48,627.12c7.23-11.7,17.21-18,104.8-44.28,35.09-10.52,52.64-15.78,60.62-17.29,42.6-8,56.1-1.18,120.21,0,87.31,1.62,111.79-10.14,139.74,13,9.1,7.53,16.34,19.42,30.82,43.21,27.1,44.5,42.65,70,39,90.73-3.45,19.83-25.77,38.28-156.17,69.13C385.2,816,305.23,833.63,242.85,787c-41.38-30.94-53.43-81-53.43-81C184.58,688.11,175.18,653.48,191.48,627.12Z");
            $("#txtDesign").css("fill","white");
            $("#Design").css("transform","translateX(15px)")
        });
        $(".design").on("mouseleave",function(){
            $(this).attr("d","M191.23,622.27c7-10.84,16.75-16.69,102-41,34.16-9.74,51.23-14.61,59-16,41.47-7.43,54.61-1.1,117,0,85,1.49,108.8-9.4,136,12,8.85,7,15.9,18,30,40,26.37,41.2,41.51,64.85,38,84-3.36,18.36-25.09,35.44-152,64-141.45,31.83-219.29,48.19-280,5-40.27-28.65-52-75-52-75C184.52,678.74,175.37,646.68,191.23,622.27Z");
            $("#txtDesign").css("fill","#515151");
            $("#Design").css("transform","translateX(-15px)")
        });

        $(".dev").on("mouseover",function(){
            $(this).attr("d","M30.29,438.64C21,368.52,66.91,318,76.63,307.32c29.89-32.88,64.15-44.94,132.68-69.06,64.94-22.86,107.37-37.79,128.47-20.43,19.31,15.88,4.44,45.34-4.21,112.84-16.41,128,19.73,157-13.69,199.4-33.76,42.84-108.95,61.87-173.75,42.8C75.08,552,37.28,491.37,30.29,438.64Z");
            $("#txtDev").css("fill","white");
            $("#Dev").css("transform","translateX(15px)")
        });
        $(".dev").on("mouseleave",function(){
            $(this).attr("d","M30.22,428.76c-8.77-67.08,34.55-115.41,43.72-125.64,28.19-31.46,60.52-43,125.17-66.07,61.27-21.87,101.29-36.15,121.21-19.55,18.21,15.2,4.19,43.38-4,108C300.86,447.91,335,475.66,303.43,516.24c-31.85,41-102.79,59.19-163.93,41C72.48,537.19,36.82,479.22,30.22,428.76Z");
            $("#txtDev").css("fill","#515151");
            $("#Dev").css("transform","translateX(-15px)")
        });

        $(".propos").on("mouseover",function(){
            $(this).attr("d","M990,730.9c-28.65-28.79-82.56-27.25-107.38,2.36-11.92,14.21-14,35.19-18.25,77.15-4.3,42.77-6.45,64.15,2.09,77.74,26.06,41.51,128.4,29.74,149.6-21.79,6.63-16.1,4.2-33.35.52-59.48C1012.33,776.59,1008.51,749.5,990,730.9Z");
            $("#txtPropos").css("fill","white");
            $("#à_propos").css("transform","translateX(5px)")
        });
        $(".propos").on("mouseleave",function(){
            $(this).attr("d","M984.73,727.77c-27.48-24.45-79.19-23.13-103,2-11.43,12.06-13.45,29.87-17.5,65.5-4.13,36.31-6.19,54.46,2,66,25,35.23,123.16,25.24,143.5-18.5,6.36-13.68,4-28.32.5-50.5C1006.14,766.55,1002.48,743.56,984.73,727.77Z");
            $("#txtPropos").css("fill","#515151");
            $("#à_propos").css("transform","translateX(-5px)")
        });


});

function buttonVisit () { // fonction buttonVisit qui active l'animation des nuages et qui supprime la div qui contient la page d'introduction
    $(".div-gauche").addClass("mouvLeft");
    $(".div-droite").addClass("mouvRight");
    $(".intro-div").addClass("accueilEnd");
    $(".boat1").addClass("boatMouvLeft");
    $(".boat2").addClass("boatMouvRight")
    $("title").text("Bienvenue sur WWI !");
    setTimeout(function(){
        $(".intro-div").remove();
    }, 5000);

};

