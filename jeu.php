<!DOCTYPE html>

<html>
  <!--HEADER-->
  <head>
    <meta charset="UTF-8", content="width=device-width, user-scalable=no">
    <title>Jeu MasterMind</title>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>

  <body>
<?php
  session_start();
  $pseudo=$_SESSION['pseudo'];
  $difficulty=$_SESSION['difficulty'];
  
?>

<input type=hidden id=variableAPasser value=<?php echo($difficulty); ?>/>

<script>
  var difficulty = '<?php echo $difficulty; ?>';
  console.log("NOMBRE DE COUPS".difficulty);
  setDifficulty(difficulty);
</script>



  <?php
  
  
  

  
if(empty($pseudo)){
  $_SESSION['messError']="Pseudo vide !";
  header('location:index.php');
}
else{

  
  /*Activation des erreurs msqli */
 mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
 $mysqli = mysqli_connect('localhost','dev','sio','MasterMind');

 /*définir le jeu de caractères (syntaxes) après la connextion*/
 mysqli_set_charset($mysqli, 'utf8mb4');
 //printf("sucess... %s\n", mysqli_get_host_info($mysqli));

 mysqli_select_db($mysqli, "MasterMind");
 
 $result = mysqli_query($mysqli, "select * from joueurs where pseudo ='$pseudo';");


 
 $nbjoueurs = mysqli_num_rows($result);

     if($nbjoueurs<1){    

      /*Activation des erreurs msqli */
      mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
      $mysqli = mysqli_connect('localhost','dev','sio','MasterMind');

      /*définir le jeu de caractères (syntaxes) après la connextion*/
      mysqli_set_charset($mysqli, 'utf8mb4');
      //printf("sucess... %s\n", mysqli_get_host_info($mysqli));

      mysqli_select_db($mysqli, "MasterMind");

      $query="INSERT INTO joueurs (pseudo) VALUES('$pseudo');";
      mysqli_query($mysqli, $query);

     }
}




  
  ?>


    <div class="avancement">
      <div id="badPlacedColors">Couleurs présentes mais mal placées : *Chargement*</div>
      <div id="rightPlacedColors">Vous avez *chargement* couleurs à la bonne place</div>
    </div>



    <div class="plateau">

      <div class="tapis">

        <table class="jeu">

          <tr>
            <td class="case colonne1 ligne1">c-1 l-1</td>
            <td class="case colonne2 ligne1">c-2 l-1</td>
            <td class="case colonne3 ligne1">c-3 l-1</td>
            <td class="case colonne4 ligne1">c-4 l-1</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne2">c-1 l-2</td>
            <td class="case colonne2 ligne2">c-2 l-2</td>
            <td class="case colonne3 ligne2">c-3 l-2</td>
            <td class="case colonne4 ligne2">c-4 l-2</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne3">c-1 l-3</td>
            <td class="case colonne2 ligne3">c-2 l-3</td>
            <td class="case colonne3 ligne3">c-3 l-3</td>
            <td class="case colonne4 ligne3">c-4 l-3</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne4">c-1 l-4</td>
            <td class="case colonne2 ligne4">c-2 l-4</td>
            <td class="case colonne3 ligne4">c-3 l-4</td>
            <td class="case colonne4 ligne4">c-4 l-4</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne5">c-1 l-5</td>
            <td class="case colonne2 ligne5">c-2 l-5</td>
            <td class="case colonne3 ligne5">c-3 l-5</td>
            <td class="case colonne4 ligne5">c-4 l-5</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne6">c-1 l-6</td>
            <td class="case colonne2 ligne6">c-2 l-6</td>
            <td class="case colonne3 ligne6">c-3 l-6</td>
            <td class="case colonne4 ligne6">c-4 l-6</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne7">c-1 l-7</td>
            <td class="case colonne2 ligne7">c-2 l-7</td>
            <td class="case colonne3 ligne7">c-3 l-7</td>
            <td class="case colonne4 ligne7">c-4 l-7</td>
          </tr>

          <tr>
            <td class="case colonne1 ligne8">c-1 l-8</td>
            <td class="case colonne2 ligne8">c-2 l-8</td>
            <td class="case colonne3 ligne8">c-3 l-8</td>
            <td class="case colonne4 ligne8">c-4 l-8</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne9">c-1 l-9</td>
            <td class="case colonne2 ligne9">c-2 l-9</td>
            <td class="case colonne3 ligne9">c-3 l-9</td>
            <td class="case colonne4 ligne9">c-4 l-9</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne10">c-1 l-10</td>
            <td class="case colonne2 ligne10">c-2 l-10</td>
            <td class="case colonne3 ligne10">c-3 l-10</td>
            <td class="case colonne4 ligne10">c-4 l-10</td>
          </tr>
          
          <tr>
            <td class="case colonne1 ligne11">c-1 l-11</td>
            <td class="case colonne2 ligne11">c-2 l-11</td>
            <td class="case colonne3 ligne11">c-3 l-11</td>
            <td class="case colonne4 ligne11">c-4 l-11</td>
          </tr>

          <tr>
            <td class="case colonne1 ligne12">c-1 l-12</td>
            <td class="case colonne2 ligne12">c-2 l-12</td>
            <td class="case colonne3 ligne12">c-3 l-12</td>
            <td class="case colonne4 ligne12">c-4 l-12</td>
          </tr>

          

          

          <tr>
            <td class="case reponse1">REPONSE1</td>
            <td class="case reponse2">REPONSE2</td>
            <td class="case reponse3">REPONSE3</td>
            <td class="case reponse4">REPONSE4</td>
          </tr>
        </table>
      </div>

      <div class="choix">

        <div class="couleur1">
          <button id="couleur1" onclick="changeBackgroundColorBlue()">couleur1</button>
        </div>

        <div class="couleur2">
          <button id="couleur2" onclick="changeBackgroundColorRed()">couleur2</button>
        </div>

        <div class="couleur3">
          <button id="couleur3" onclick="changeBackgroundColorGreen()">couleur3</button>
        </div>

        <div class="couleur4">
          <button id="couleur4" onclick="changeBackgroundColorYellow()">couleur4  </button>
        </div>

        <div class="changerCase">
          <button id="changerCase" onclick="changerCase()">case suivante  </button>
        </div>

        <div class="trier">
          <button id="trier" onclick="triage()">trier  </button>
        </div>

      </div>


      <div class="recommencer">
        <button id="recommencer" onclick="location.reload(); entierAleatoire(1,4)">Recommencer</button>
      </div>

      <div class="reglesDuJeu">
        <button id="reglesDuJeu" onclick="location.href='regles.php';" >Règles du jeu</button>
      </div>


      

    </div>
    <div class="affichage">
      <div class="scoreLeader">
      <div class="scoreboard" id="scoreboard">
        SCOREBOARD
        
      </div>


      <div class="lerderBoard" id="leaderBoard">LeaderBoard <br>



      <?php
    




    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect('localhost','dev','sio','MasterMind');

$query = "select * from score order by score desc LIMIT 10;";

$result = mysqli_query($mysqli, $query);

/* fetch associative array */
while ($row = mysqli_fetch_assoc($result)) {
    printf("%s (%s) </br>", $row["ID_joueur"], $row["score"]);
}

  ?>



      </div>

      </div>
      <div class="options">

        <div class="setDifficulty">
          <button class="difficulty nivFacile" id="nivFacile" onclick="setDifficulty(12)">Facile</button>
          <button class="difficulty nivMoyen" id="nivMoyen" onclick="setDifficulty(10)">Moyen</button>
          <button class="difficulty nivDifficile" id="nivDifficile" onclick="setDifficulty(8)">Difficile</button>
          
        </div>
        
        <div class="indications">
        <ul>
          <li>Niveau Facile : 12 coups</li>
          <li>Niveau Moyen : 10 coups</li>
          <li>Niveau Difficile : 8 coups</li>
        </ul>
        <p id="indic">Vous avez utilisé *chargement* coups sur *chargement*</p>
        <p>Si vous allez dans les règles, votre partie sera réinitialisée</p>
      </div>



      </div>

    </div>



  
  </body>
</html>

<!--NATHAN MILITO-->
