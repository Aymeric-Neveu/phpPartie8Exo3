<?php
if (isset($_POST['button'])) {
setcookie('utilisateur', $_POST['utilisateur'], time() + 365*24*3600);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <form action="index.php" method="post">
     <div>
      <label for="">Login :</label>
      <input type="text" name="utilisateur" value="">
     </div>
     <div>
       <label for="">Mot de passe :</label>
       <input type="password" name="mdp" value="">
     </div>
     <div>
       <button type="submit" name="button">Valider</button>
     </div>
    </form>
  </body>
</html>
