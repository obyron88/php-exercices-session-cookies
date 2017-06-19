<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Guillaume';
$_SESSION['nom'] = 'Cros';
$_SESSION['age'] = 26;

 setcookie('log', $_POST["log"]);
 setcookie('mdp', $_POST["mdp"]);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  <title>Exercices-session-cookies</title>
</head>

<body>
<p> Adresse IP:
<?= $_SERVER['REMOTE_ADDR'];?></p>
<p> Navigateur:
<?= $_SERVER['HTTP_USER_AGENT'];?></p>
<p> Nom du serveur:
<?= $_SERVER['SERVER_NAME'];?></p>


 <a href="page2.php">Afficher nom prenom age</a><br><br>
 <form action="index.php" method="post">
   <input placeholder="Pseudo" name="log" value="">
   <input placeholder="Mot de passe" name="mdp" value="">
   <input type="submit" value="Envoyer" />
 </form><br>
 <a href="page3.php">Afficher pseudo mdp</a><br><br>
 <a href="page4.php">Modifier infos</a>
</body>

</html>
