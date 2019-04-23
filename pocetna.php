<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pocetna</title>

</head>
<body>

<form action="pristupi.php" method="POST">
<input type="text" name="korisnik" placeholder="Korisničko ime"><br><br>
<input type="password" name="sifra" placeholder="Šifra"><br><br>
<button type="submit">Pristupi</button>
</form>



<br><br><br>

<form action="nalog.php" method="POST">
<input type="text" name="ime" placeholder="Ime"><br><br>
<input type="text" name="prezime" placeholder="Prezime"><br><br>
<input type="text" name="korisnik" placeholder="Korisničko ime"><br><br>
<input type="password" name="sifra" placeholder="Šifra"><br><br>
<button type="submit">Otvori nalog</button>



</form>






<body>
</html>