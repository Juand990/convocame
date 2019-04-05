<?php
session_start();
		
header('Content-type: text/html; charset=utf-8');	
if(isset($_POST["jugadors"])){

if(isset($_POST["nom"]) && isset($_POST["cognom"]) && isset($_POST["telefon"]) && isset($_POST["msg"])){

	include "conexion.php";

	mysqli_set_charset($con,'utf8');

	if($_POST["nom"]!=""&& $_POST["telefon"]!=""&& $_POST["msg"]!=""){				

		$telefon = $_POST['telefon'];	
		$entrenador=$_SESSION['user_id'];
			
		if(strlen($telefon)==9){
			$found=false;
			$sql1= "select * from jugadors where telefon=$telefon";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){

			echo "<script>alert(\"Aquest telèfon de jugador ja està registrat.\");window.location='../home.php';</script>";
			}
			else{

			$sql ="INSERT INTO jugadors(nom, cognom, telefon, msg, entrenador) VALUES (\"$_POST[nom]\",\"$_POST[cognom]\",\"$_POST[telefon]\",\"$_POST[msg]\",\"$entrenador\")";
				$query = $con->query($sql);
			}
			if($query!=null){
				echo "<script>alert(\"Registre exitós.\");window.location='../home.php';</script>";
			}
		}else{
			echo "<script>alert(\"El camp del telèfon ha de tenir nou dígits.\");window.location='../home.php';</script>";
		}
			

		
	}else{
		echo "<script>alert(\"El nom, el telèfon i el missatge no poden estar buits\");window.location='../home.php';</script>";
	}	
}
}
/*
 /*
if(!mysqli_query($con,$sql)){

echo "ERROR: ".mysqli_sqlstate($con);
echo "ERROR: ".mysqli_error($con);
}
*/
?>
