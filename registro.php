<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<link rel="icon" type="image/png" href="img/icon.png" />
    <title>Convocam</title>
    <!-- Registro core CSS -->
	<link href="css/registro.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
<?php
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	include "php/navbar.php";
}else{
	include "php/navlogin.php";
}
?>

    <!-- Header -->
    <header class="masthead" >
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Convocam</h1>
         <div id="container">
		<form role="form" class="topBefore" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">		    
		    <input type="text" id="username" name="username" placeholder="Nom d'usuari">
		  </div>		  
		  <div class="form-group">		    
		    <input type="email" id="email" name="email" placeholder="Email">
		  </div>
		  <div class="form-group">		   
		    <input type="password" id="password" name="password" placeholder="Password">
		  </div>
		  <div class="form-group">		    
		    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirma Password">
		  </div>
		  <div class="g-recaptcha" data-sitekey="6LcbtZEUAAAAACUFCWqB60TdDVxz8otifOXCavZl"></div>
		  
		  <input id="enviar" type="submit" value="Registrar-se">
		
		</form>
	 </div>
	</div>
      </div>
		<script src="js/valida_registro.js"></script>			
    </header>

     <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
		  
        <!--Copyright &copy; -->CONVOCAM 2019<br>
        <img src="img/puntcat.png" style="width:100px;">
        <img src="img/dinahosting.png" style="width:150px;">
        
      </div>
      
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Llicència de Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br />Aquesta obra està subjecta a una llicència de <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Reconeixement-NoComercial-CompartirIgual 4.0 Internacional de Creative Commons</a>
      
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>

