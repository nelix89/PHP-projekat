<?php
session_start();
include 'baza.php';

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$korisnik = $_POST['korisnik'];
$sifra = $_POST['sifra'];


$sql = "INSERT INTO user(ime, prezime, korisnik, sifra) 
VALUES('$ime', '$prezime', '$korisnik', '$sifra')";

$result = mysqli_query($conn, $sql);

header("Location: pocetna.php");