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
      $ask = filter_input(INPUT_POST,'ask');
      $nick = filter_input(INPUT_POST,'jmeno');
      $answer = filter_input(INPUT_POST,'answer');


      echo " <b> Bylo vyplněno jméno : </b>  $username <br>";
      echo " <b> Bylo vyplněno vaše heslo : </b> $password <br>";
      echo " <b> Vaše pohlavý : </b>  $gender <br>";
      echo " <b> Váš email : </b> $email <br>";
      echo " <b> Vaše kontrolní odpověď </b> :  $answer <br>";
      
      ?>
    
</body>
</html>