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


<?php

	if(isset($_SESSION['id'])){
		
		echo "Vaš id je:<br>";
		
	echo $_SESSION['id'];
	
	}
	

?>

<br><br><br>

<form action="odjavi.php">
<button>Odjavi se</button>
</form>

<br><br><br>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit" name="submit">Dodaj fajl</button>

<br><br><br><br>

<a href="http://localhost/My%20project/treca.php">VAŠE ZANIMANJE</a>


<body>
</html>