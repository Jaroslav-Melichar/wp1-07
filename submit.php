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
      $nick = filter_input(INPUT_POST,'jmeno');

      echo "Bylo vyplněno jméno :  $username <br>";
      echo "Bylo vyplněno vaše heslo :  $password <br>";
      echo "Vaše pohlavý :  $gender <br>";
      echo "Váš email :  $email <br>";
      echo "Zadal jste že je hlavni město :  $City <br>";
      echo "Vaše babička za svobodna se jmenovala :  $nick <br>";


    
      
      ?>
    
</body>
</html>