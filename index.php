<!DOCTYPE html>
<html>
  <!--HEADER-->
  <head>
    <meta charset="UTF-8", content="width=device-width, user-scalable=no">
    <title>Jeu MasterMind</title>
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="styleIndex.css" />
  </head>

  <body>
  
  <?php
  session_start();
  if(isset($_SESSION['messError'])){
    echo('PSEUDO VIDE, veuillez entrer un pseudo');
  }
  ?>

    <div class="container">
        <div class="centered-element">
            Bienvenu.e.s dans le jeu !
            <form action="chargement.php" class="formulairePseudo" method="post">
                <input type="text" name="pseudo" id="pseudo" class="pseudo name field-in font" placeholder="Ton pseudo :"/>
                <button class="submit font" href="#">Envoyer</button>
            </form>
        </div>  
    </div>  

  </body>
</html>

<!--NATHAN MILITO-->
