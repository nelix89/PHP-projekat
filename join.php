<?php
$con=mysqli_connect("localhost","root","","logovanje");



if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  

  
$sql="SELECT posao.*, user.*, zanimanje.vrsta FROM posao JOIN user ON posao.id=user.id JOIN zanimanje ON posao.zanimanjeID=zanimanje.zanimanjeID";
$result=mysqli_query($con,$sql);





while ($row = $result->fetch_assoc()) {
    printf ("%s %s %s %s<br><br><br>",$row["pID"],$row["ime"],$row["prezime"],$row["vrsta"]);
}





mysqli_close($con);
?>