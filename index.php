<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Guillaume';
$_SESSION['nom'] = 'Cros';
$_SESSION['age'] = 26;
if(isset($_POST['log'])) {
 setcookie('log', $_POST["log"]);
 setcookie('mdp', $_POST["mdp"]);
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="bootstrap.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
<script src="bootstrap.js"></script>
  <title>Exercices-session-cookies</title>
</head>

<body class="jumbotron">

<p> Adresse IP:
<?= $_SERVER['REMOTE_ADDR'];?></p>
<p> Navigateur:
<?= $_SERVER['HTTP_USER_AGENT'];?></p>
<p> Nom du serveur:
<?= $_SERVER['SERVER_NAME'];?></p>


 <br><br>
 <form action="index.php" method="post">
   <input placeholder="Pseudo" name="log" value="">
   <input placeholder="Mot de passe" name="mdp" value="">
   <input type="submit" value="Envoyer" />
 </form><br>



 <nav id="header" class="navbar navbar-fixed-top">
          <div id="header-container" class="container navbar-container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>

              </div>
              <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="page2.php">Afficher nom prenom age</a></li>
                      <li><a href="page3.php">Afficher pseudo mdp</a></li>
                      <li><a href="page4.php">Modifier infos</a></li>
                  </ul>
              </div><!-- /.nav-collapse -->
          </div><!-- /.container -->
      </nav><!-- /.navbar -->


</body>

</html>
