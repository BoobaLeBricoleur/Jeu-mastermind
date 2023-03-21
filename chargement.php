<?php 

session_start();
$_SESSION['pseudo']=$_POST['pseudo'];

if($_POST['difficulte']=='facile'){
    $_SESSION['difficulty'] = 12;
}
else if($_POST['difficulte']=='moyen'){
    $_SESSION['difficulty'] = 10;
}
else if($_POST['difficulte']=='difficile'){
    $_SESSION['difficulty'] = 8;
}

header('Location:jeu.php');

?>