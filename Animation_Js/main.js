noStroke(); 
var rightX = 300;
var sunRadius = 100;   // coordonnee des nuage sur l'axe X

draw = function() {
    background(184, 236, 255);
 
    fill(255, 170, 0);
    ellipse(200, 100, sunRadius, sunRadius); // setup du soleil dans le cadre de l'exemple 
    
    // clouds 
    fill(255, 255, 255); // setup couleur nuage 
    // left cloud
    ellipse(leftX, 150, 126, 97); 
    ellipse(leftX+62, 150, 70, 60);      // setup nuage gauche 
    ellipse(leftX-62, 150, 70, 60);
    
    // right cloud
    ellipse(rightX,100, 126, 97);
    ellipse(rightX+62, 100, 70, 60);   //setup nuage droite
    ellipse(rightX-62, 100, 70, 60);
    
    rightX +=1; // animation nuage direction la droite
    leftX -=1; // aniamtion nuage direction la gauche
    
};