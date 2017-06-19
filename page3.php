<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  <title>Exercices-session-cookies</title>
</head>

<body>
<p>
  Ton Pseudo est <?php echo $_COOKIE['log']; ?> et ton mot de passe <?php echo $_COOKIE['mdp']; ?> c'est bien ça ?
</p>
<a href="index.php">Retour</a>
</body>

</html>
