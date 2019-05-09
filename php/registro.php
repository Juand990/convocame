<?php

$name = stripslashes($_POST["name"]);
	$email = stripslashes($_POST["email"]);
	$message = stripslashes($_POST["message"]);
 
	$recaptcha = $_POST["g-recaptcha-response"];
 
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => '6LcbtZEUAAAAAFKtGX3R_bLWUuoNFKIbu36_OSwC',
		'response' => $recaptcha
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'content' => http_build_query($data)
		)
	);
	$context  = stream_context_create($options);
	$verify = file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);
	
	//Si completa el captcha, li deixa registrar-se.
	if ($captcha_success->success) {		
		if(!empty($_POST)){
	if(isset($_POST["username"])  &&isset($_POST["email"]) &&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["username"]!=""&& $_POST["email"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from entrenadors where username=\"$_POST[username]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				echo "<script>alert(\"Aquest nom d'usuari ja esta registrat.\");window.location='../registro.php';</script>";
			}else{
			$sql = "insert into entrenadors(username,password,email) value (\"$_POST[username]\",md5(\"$_POST[password]\"),\"$_POST[email]\")";
			$query = $con->query($sql);
			}
			
			if($query!=null){
				echo "<script>alert(\"Registre exitos. Ja pots entrar\");window.location='../login.php';</script>";
			}
		}
	}
	}
	} else {
		// No ha acceptat el captcha.
		echo "<script>alert(\"Has de confirmar el captcha.\");window.location='../registro.php';</script>";
	}

?>
