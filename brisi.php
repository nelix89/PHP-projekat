<?php
session_start();
include 'baza.php';

$pID = $_POST['pID'];

$sql = "DELETE FROM posao WHERE pID=$pID";

$result = mysqli_query($conn, $sql);

header("Location: treca.php");