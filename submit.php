<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Vypsaná data : </h1>
<?php
      $username = filter_input(INPUT_POST,'username');
      $password = filter_input(INPUT_POST,'password');
      $gender = filter_input(INPUT_POST,'gender');
      $email = filter_input(INPUT_POST,'email');
      $City = filter_input(INPUT_POST,'City');
      $jmeno = filter_input(INPUT_POST,'jmeno');
      echo "Bylo vyplněno jméno $username <br>";
      echo "Bylo vyplněno vaše heslo $password";

     if (($username =='Jaroslav Melichar') && ($password == '1892')){
         echo  "úspěšně jste se přihlásil";}
    else {
    echo "Nepodařilo se přihlásit";}

      
      ?>
    
</body>
</html>