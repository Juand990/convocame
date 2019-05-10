<?php

header('Content-type: text/html; charset=utf-8');
include "conexion.php";
mysqli_set_charset($con,'utf8');

  if(isset($_POST["Import"])){  
	session_start();      
	$entrenador=$_SESSION["user_id"];

	//Seleccionem l'arxiu.
	$fname= $_FILES['sel_file']['name'];  
	
	$chk_ext=explode(".",$fname);

	if(strtolower(end($chk_ext)) == "csv"){
	$filename= $_FILES['sel_file']['tmp_name'];
	$handle= fopen($filename,"r");

		//Agafem les dades que estiguin separats per comes.
	  while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){

		$found=false;
		$sql1= "select * from jugadors where telefon=\"$data[2]\"";
		$query = $con->query($sql1);
		while ($r=$query->fetch_array()) {
			$found=true;
			break;
		}
		//Si a la base de dades està aquest telèfon no l'inserta.
		if($found){
		echo "<script>alert(\"Algun usuari ja ha registrat algun d'aquests telèfons.\");window.location='../mostraj.php';</script>";	

		}else{
		$sql="insert into jugadors (nom,cognom,telefon,msg,entrenador) 
		values ('$data[0]','$data[1]',$data[2],'$data[3]',$entrenador)";	
		$con->query($sql);
		}
 	  	 
   	  }

	fclose($handle);  
	echo "<script>alert(\"Dades registrades.\");window.location='../mostraj.php';</script>";	
	}

	else{
	//Si dona un error mostra aquest missatge.	
	echo "<script>alert(\"Arxiu invàlid. La separació de camps per una coma.\");window.location='../mostraj.php';</script>";
	}
  	
}
?>
