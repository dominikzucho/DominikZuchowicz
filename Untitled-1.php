<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>



  <form action="" method="post">

  <div>

  Login:<br />

  <input name="Login:" type="text" value="" /><br />

  Haslo:<br />

  <input name="Haslo:" type="text" value="" /><br />

  <input type="submit" value="Sprawdz" name="submit" />

  </div>

  </form>

  <?php
  $login = $_POST['login'];
  $haslo = $_POST['haslo'];

  if(empty($_GET['login'])||empty($_GET['haslo']))
  echo "Proszę wpisać hasło oraz login".'<br>'; 


  if ((($haslo)=<6)||(($haslo)=>4))
  echo "Jakość hasła: Dobra".'<br>';

  if ((($haslo)>7)
  echo "Jakość hasła: Średni".'<br>'; 
  ?>

</body>

</html>