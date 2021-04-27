<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Sčítání lidu </h1>
     <form action="submit.php" method ="post">
      <label for="username">Vaše jméno :  </label>    
      <input type="text" name="username" id ="username" >
      <br>

      <h3>Vyberte vaše pohlaví : </h3>

      <input type="radio" id="Muž" name="gender" value="Muž">
       <label for="Muž">Muž</label><br>
       <input type="radio" id="Žena" name="gender" value="Žena">
       <label for="Žena">Žena</label><br>
     <input type="radio" id="Nechci uvádět" name="gender" value="Nechci uvádět">
       <label for="Nechci uvádět">Nechci uvádět</label>
<br>

<h3>Napište váš email : </h3>
<form method="post" action="">
  <input type="email" placeholder="Melichar.@seznam.cz" />
</form>
<br>

<h3>Hlavní město České republiky : </h3>
<select name="City">
<option value="PG">Praha</option>
<option value="BR" selected="selected">Brno</option>
<option value="PL" selected="selected">Plzeň</option>
<option value="LI" selected="selected">Liberec</option>
<option value="KL" selected="selected">Kolín</option>
<option value="ČL" selected="selected">Čáslav</option>
<option value="NONE" selected="selected">Ani jedno z uvedených</option>
<option value="" selected="selected"></option>
</select>
<br>

<h3>Jak se jmenovala vaše babička za svobodna ?</h3>
<input type="text" name="jmeno">
<br>
<br>

      <input type="submit" value= "Odeslat" > 
    </form>
</body>
</html>