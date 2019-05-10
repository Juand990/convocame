<!DOCTYPE html>
<html lang="en">

  <head>

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
	
	<!-- Secció Cookie -->
	<script type="text/javascript">
    window.cookieconsent_options = {"message":"Sol·licitem el seu permís per obtenir dades estadístiques de la seva navegació en aquesta web, en compliment del Reial decret-llei 13/2012. Si continua navegant considerem que accepta l'ús de cookies.","dismiss":"Acepto","theme":"dark-bottom"};
	</script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
  </head>

  <body id="page-top">

    <!-- Navigation -->
<?php
include "php/navbar.php";
?>

<!-- Formulari per canviar la contrasenya. -->
<section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">			
          <div class="col-lg-8 mx-auto">           
            <h2 class="text-white mb-4">Canviar Contrasenya</h2>            
          </div>	
        </div>       
      </div>
<form action="#" method="post">

            <input type="text" name="user" placeholder="Nom d'Usuari"><br><br>

            <input type="password" name="pass" placeholder="Nova Password"><br><br>

	    <input type="password" name="passdos" placeholder="Repeteix la Password"><br><br>
           
            <input type="submit" id="update" name="update" value="Actualitzar Password">

        </form>

    </section>
<!-- Contact Section -->
    <section class="contact-section bg-black">
     <div class="social d-flex justify-content-center">
          <a href="#" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/jdadrtsv/convocame.git" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

    </section>
   
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

<?php
 
// Codi per actualitzar la contrasenya.

if(isset($_POST['update'])){

include "php/conexion.php";  

	if($_POST["user"]!=""&& $_POST["pass"]!=""&&$_POST["passdos"]!=""){   
		
		$user = $_POST['user'];
		$pass = md5($_POST['pass']); 
		$passdos = md5($_POST['passdos']);

		if($pass==$passdos){
			$id ="SELECT codi FROM entrenadors WHERE username='".$user."'";

			$result = mysqli_query($con, $id);
			$pos=mysqli_fetch_array($result);

			$codi=$pos["codi"];
			//echo $codi=$pos["codi"];


			if($codi){
				$query = "UPDATE entrenadors SET password='".$pass."' WHERE username='".$user."'";
				$result = mysqli_query($con, $query);
				     
				   mysqli_close($con);

				echo "<script>alert(\"Contrasenya canviada.\");window.location='login.php';</script>";
			}else{
				echo "<script>alert(\"Aquest nom d'usuari no existeix.\")</script>";
			}
		}else{
			echo "<script>alert(\"Els password han de coincidir.\")</script>";
		}		

	}else{
		echo "<script>alert(\"Els camps no poden estar vuits.\")</script>";
	}	
}


?>
