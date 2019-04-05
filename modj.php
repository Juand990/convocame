<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Accés invàlid!!\");window.location='login.php';</script>";
}

?>
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

  </head>

  <body id="page-top">

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php#page-top">CONVOCAM</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">          
            <li class="nav-item">
              <a class="nav-panel js-scroll-trigger" href="home.php">Inserta Jugadors </a>	
            </li>
            <li class="nav-item">
              <a class="nav-panel js-scroll-trigger" href="logout.php">Sortir </a>	
            </li>          
          </ul>
        </div>
      </div>
    </nav>
  
   <section id="projects" class="projects-section bg-light">
      <div class="container">		       
          <div class="text-center">	
		
         <form action="#" method="post">

            <input type="text"  id="msg" name="msg" maxlength="50" placeholder="Missatge què veurà el Jugador"><br><br>
            
           
            <input type="submit" id="update" name="update" value="Nou Missatge">

        </form>
	              
          </div>          		 
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
	include "php/conexion.php";
mysqli_set_charset($con,'utf8');
	if($con->connect_errno){
		echo "Fallo con:".$con->connect_error;
	}	
	if(isset($_POST['update'])){
		$codi=$_GET["modj"];
		$query = "UPDATE jugadors SET msg='".$_POST["msg"]."' WHERE codi='".$codi."'";
					$result = mysqli_query($con, $query);					     
					   
		if(!mysqli_query($con,$query)){		
		echo "ERROR: ".mysql_sqlstate($con);
		}else echo "<script>alert(\"Missatge canviat.\");window.location='mostraj.php';</script>";
	}
	mysqli_close($con);	
?> 

