<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleRegles.css" />
    <title>Règles du jeu</title>
</head>
<body>


<?php 

session_start();
echo($_SESSION['pseudo']);

?>


    <strong>
    <div class="accueil">
        <a href="jeu.php" class="boutton boutton2">Retourner au jeu</a>
    </div>

    <div class="regles">
    <ul class="listeRegles">
        
        <li>Une combinaison de 4 couleurs est tirée au hasard</li>
        <li>Commencez par choisir la difficulté, chaque difficulté définit au préalable votre nombre de coups</li>
        <li>Choisissez votre première combinaison de 4 couleurs</li>
        <li>Les indications sur la gauche va vous indiquer plusieurs choses :</li>
            <ul>
                <li>Le nombre de couleurs bien placées</li>
                <li>Et le nombre de couleurs mal placées</li>
            </ul>
        <li>En enchaînant les coups vous pourrez faire vos déductions afin de déterminer quelles sont les bonnes couleurs</li>
        <li>Une couleur à la mauvaise place vous donne 1 points</li>
        <li>Une couleur à la bonne place vous donne 2 points</li>
        <li>Trouver la bonne réponse vous donne 20 points</li>
        <li>Bonne chance !</li>
    
    </ul>
    
</div>
</strong>
</body>
</html>