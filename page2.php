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

<p>Re-bonjour !</p>

  <p>
      Je me souviens de toi ! Tu t'appelles <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom']; ?> !<br />
      Et ton âge… Tu as <?php echo $_SESSION['age']; ?> ans, c'est ça ? :-D
  </p>
<a href="index.php">Retour</a>

</body>

</html>
