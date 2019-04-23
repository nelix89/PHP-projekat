<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Treca</title>

</head>
<body>

<form action="zanimanje.php" method="POST">
<p>Unesite vaše zanimanje:</p>
<p> Vaš id:
<input type="number" name="id"></p>
<p>Šifra zanimanja:
<input type="number" name="zanimanjeID" min="1" max="5"></p>
<button type="submit" value="Insert">Potvrdi</button>
</form>

<br><br>

<p>Šifra zanimanja:</p>
<p>	1 	Stomatolog<br>
	2 	Programer<br>
	3 	Profesor<br>
	4 	Knjigovodja<br>
	5 	Menadzer<br>
</p>

<br>

<a href="http://localhost/My%20project/join.php">LISTA KORISNIKA I ZANIMANJA</a>

<br><br>

<p>Ovde možete brisati podatke sa liste.</p>
<p>Unesite redni broj sa liste:</p> 
<form action="brisi.php" method="POST">
<input type="number" name="pID">
<button type="submit">Potvrdi</button>

<br><br><br><br>

<a href="http://localhost/My%20project/poslovi.php">NEUPRAŽNJENE RADNE POZICIJE</a>

</head>
<body>