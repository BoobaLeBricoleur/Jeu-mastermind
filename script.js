var colonne = 1;
var ligne = 1;
let proposition=[];
let reponse = [];
let couleur;
let rightPlacedColors = 0;
let badPlacedColors = 0;
let nbCoups = 0;
let nbCoupsMax = 12;
let propositionTemp=[];
let score = 0;

function shuffle(array) {
    array.sort(() => Math.random() - 0.5);
  }

function triage(){
    proposition.push(bgcolor);
    if(propositionTemp.length < 3){
        alert("Veuillez terminer votre proposition  ")
    }
    else{
        
        for (i = 0; i<reponse.length; i++){
            console.log("i "+i);

            if(propositionTemp.includes(reponse[i])){
                badPlacedColors = badPlacedColors +1;
                shuffle(propositionTemp);
                console.log("PROPOSITION TEMP : ".propositionTemp);
            }
            else{
                alert("Vous n'avez pas de couleurs mal placées");
        }
    }
}
}



document.addEventListener('DOMContentLoaded', function() {
    entierAleatoire(1,4);
});

function setDifficulty(coups){
    nbCoupsMax = coups;
}


function changerCase(){
    propositionTemp=proposition;
    rightPlacedColors = 0;
    badPlacedColors = 0;
    proposition.push(bgcolor);
    colonne = colonne + 1;


    if(nbCoups != nbCoupsMax){

    if (colonne >= 5){
        

        var isEqual = proposition.toString() === reponse.toString();
        if(isEqual == true){
            console.log("BONNE REPONSE VOUS AVEZ GAGNE");
            score = score + 20;
            document.getElementById("scoreboard").innerHTML=score;
            alert('Vous avez trouvé la bonne combinaison ! Cliquez sur recommencer pour relancer une partie');
            
           
            
        }
        else{
            console.log("mauvaise réponse... t'es nul");

            for (i = 0; i<reponse.length; i++){
                console.log("i "+i);

                if(proposition.includes(reponse[i])){
                    badPlacedColors = badPlacedColors +1;
                    score=score+1;
                }

                


                /*
                for(j = 0; j<reponse.length; j++){
                    console.log("j"+j);
                    if(proposition[i] == reponse[j]){
                        badPlacedColors = badPlacedColors + 1;
                        console.log("Vous avez "+badPlacedColors+" couleurs mal placés : i"+i+" j"+j);
                    }
                }*/


                if(proposition[i]==reponse[i]){
                    console.log("LA COULEUR "+i+" EST A LA BONNE PLACE");
                    rightPlacedColors = rightPlacedColors + 1;
                    score = score + 2
                    console.log("Vous avez "+rightPlacedColors+" couleurs à la bonne place");
                    document.getElementById("rightPlacedColors").innerHTML="Vous avez "+rightPlacedColors+" couleurs à la bonne place";
                    document.getElementById("scoreboard").innerHTML="SCOREBOARD <br> Votre score : "+score;
                    console.log("Vous avez SCOREEE "+score+" SCOREEEE couleurs à la bonne place");
                }
            }

            if(rightPlacedColors >= 1){
                badPlacedColors = badPlacedColors - rightPlacedColors;
                score = score - rightPlacedColors;
            }

            
            console.log('VOTRE SCORE COULEURS MAL PLACEES : '+score);
            document.getElementById("scoreboard").innerHTML="SCOREBOARD <br> Votre score : "+score;
            console.log("Couleurs présentes mais mal placées : "+badPlacedColors); 
            document.getElementById("badPlacedColors").innerHTML="Couleurs présentes mais mal placées : "+badPlacedColors;
        }
        


        ligne = ligne+1;
        colonne = 1;
        console.log(proposition);
        proposition=[];
        nbCoups = nbCoups + 1;
        console.log("Vous avez utilisé  :"+nbCoups);
        document.getElementById("indic").innerHTML="Vous avez utilisé : "+nbCoups+" coups sur : "+nbCoupsMax;
    }
    }

    else{
        alert("GAME OVER, VOUS N'AVEZ PLUS DE COUPS DISPONIBLES");
    }
     
}

let bgcolor;

function changeBackgroundColorBlue() {
    var elements = document.querySelectorAll('.case.colonne'+colonne+'.ligne'+ligne);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = 'blue';
    }
bgcolor=1;
}

function changeBackgroundColorRed() {
    var elements = document.querySelectorAll('.case.colonne'+colonne+'.ligne'+ligne);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = 'red';
    }
    bgcolor=2;
}

function changeBackgroundColorGreen() {
    var elements = document.querySelectorAll('.case.colonne'+colonne+'.ligne'+ligne);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = 'green';
    }
    bgcolor=3;
}

function changeBackgroundColorYellow() {
    var elements = document.querySelectorAll('.case.colonne'+colonne+'.ligne'+ligne);
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.backgroundColor = 'yellow';
    }
    bgcolor=4;
}

function entierAleatoire(min, max)
{

    

    for(var i=1 ; i<5 ;i++){
        var entier = Math.floor(Math.random() * (max - min + 1)) + min;
        console.log(entier);
        reponse.push(entier);


        if(entier==1){
            couleur="blue";

            var elements = document.querySelectorAll('.case.reponse'+i);
            for (var j = 0; j < elements.length; j++) {
            elements[j].style.backgroundColor = couleur;
            }

        }


        else if(entier==2){
            couleur="red";

            var elements = document.querySelectorAll('.case.reponse'+i);
            for (var j = 0; j < elements.length; j++) {
            elements[j].style.backgroundColor = couleur;
            }

        }


        if(entier==3){
            couleur="green";

            var elements = document.querySelectorAll('.case.reponse'+i);
            for (var j = 0; j < elements.length; j++) {
            elements[j].style.backgroundColor = couleur;
            }

        }


        if(entier==4){
            couleur="yellow";

            var elements = document.querySelectorAll('.case.reponse'+i);
            for (var j = 0; j < elements.length; j++) {
            elements[j].style.backgroundColor = couleur;
            }

        }
    }
    console.log(reponse);

}
