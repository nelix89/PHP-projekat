<?php
session_start();
include 'baza.php';

$zanimanjeID = $_POST['zanimanjeID'];
$id = $_POST['id'];



$sql = "INSERT INTO posao(zanimanjeID, id) 
VALUES('$zanimanjeID', '$id')";

$result = mysqli_query($conn, $sql);

header("Location: treca.php");