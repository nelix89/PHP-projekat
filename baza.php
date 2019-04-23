<?php

$conn=mysqli_connect("localhost", "root", "", "logovanje");


if (!$conn){
	
	die("Ne moze se izvrsiti konekcija!");
	
}