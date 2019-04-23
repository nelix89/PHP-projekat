<?php
session_start();
include 'baza.php';


$korisnik = $_POST['korisnik'];
$sifra = $_POST['sifra'];

$sql = "SELECT * FROM user WHERE korisnik='$korisnik' AND sifra='$sifra'";



$result = mysqli_query($conn, $sql);




if (!$row = $result->fetch_assoc())
{
	echo "Uneli ste pogrešno korisničko ime ili šifru!";
} else {
	$_SESSION['id'] = $row['id'];
	header("Location: druga.php");
	}



