<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Guillaume';
$_SESSION['nom'] = 'Cros';
$_SESSION['age'] = 26;

 setcookie('log', $_POST["log"], time() + 365*24*3600, null, null, false, true);
 setcookie('mdp', $_POST["mdp"], time() + 365*24*3600, null, null, false, true);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet">
  <title>Exercices-session-cookies</title>
</head>

<body>
<?php
$_SERVER['REMOTE_ADDR'];
print_r($_SERVER);
 ?>
 <br>
 <a href="page2.php">Afficher nom prenom age</a>
 <form action="index.php" method="post">
   <input placeholder="Pseudo" name="log" value="">
   <input placeholder="Mot de passe" name="mdp" value="">
   <input href="page2.php" type="submit" value="Envoyer" />
 </form>
 <a href="page3.php">Afficher pseudo mdp</a>
</body>

</html>
