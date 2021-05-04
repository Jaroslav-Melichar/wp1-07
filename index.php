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

     <form action="submit.php" method="post">
      <label for="username"> <b> Vaše jméno : </b> </label>    
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
  <input type="email" name="email" placeholder="Melichar.@seznam.cz" />
<br>

<h3>Vyberte si kontrolní otázku a odpovězte : </h3>
<select name="ask">
<option value="ask">Jméno vaší třídní učitelky na druhém stupni ZŠ</option>
<option value="ask" selected="selected">Jaké bylo jméno vaší matky za svobodna</option>
<option value="ask" selected="selected">Jaká je vaše oblíbená hudební skupina</option>
<option value="ask" selected="selected">Jméno vašeho prvního mazlíčka</option>
<option value="ask" selected="selected">V jakém roce jste odmaturoval</option>
<option value="ask" selected="selected">Křestní jméno vašeho otce</option>
<option value="ask" selected="selected">Značka vašeho prvního auta</option>
<option value="ask" selected="selected">Vyberte si otázku</option> 
</select>
<br>
<br>
<input type="answer" name="answer">
<br>
<br>
     <input type="submit" value="odeslat">
    </form>
</body>
</html>