<?php
$con=mysqli_connect("localhost","root","","logovanje");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  
$sql="SELECT radno_mesto.radno_mesto, profesija.profesija FROM radno_mesto JOIN profesija ON radno_mesto.br_profesije=profesija.brP"; 

$result=mysqli_query($con,$sql);




while ($row = $result->fetch_assoc()) {
printf ("%s (%s)<br><br><br>",$row["radno_mesto"],$row["profesija"]);

}




mysqli_close($con);
?>