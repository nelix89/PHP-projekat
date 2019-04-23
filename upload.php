<?php
if (isset($_POST['submit'])){
	
	$file=$_FILES['file'];
	
	
	$fileName=$_FILES['file']['name'];
	$fileTmpName=$_FILES['file']['tmp_name'];
	$fileSize=$_FILES['file']['size'];
	$fileError=$_FILES['file']['error'];
	$fileType=$_FILES['file']['type'];
	
	$fileExt=explode('.', $fileName);
	$fileActualExt=strtolower(end($fileExt));
	
	$allowed=array('jpg', 'jpeg', 'png', 'pdf', 'txt');
	
if (in_array($fileActualExt, $allowed))
{
	if($fileError === 0){
		
		if($fileSize <1000000){
			
			$fileNameNew=uniqid('', true).".".$fileActualExt;
		$fileDestination='upload/'.$fileNameNew;
	move_uploaded_file($fileTmpName, $fileDestination);
echo "Uspešno ste dodali fajl!";
			
		}
		else{
			echo "Fajl je preveliki!";
			
		}
		
		
	}
	else{
		echo "Došlo je do greške!";
	}
	
	
}
else{
		echo "Ne možete dodati fajl ovog tipa!";
	
	}




	}