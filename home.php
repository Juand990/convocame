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
    
	<!-- Secció Cookie -->
	<script type="text/javascript">
    window.cookieconsent_options = {"message":"Sol·licitem el seu permís per obtenir dades estadístiques de la seva navegació en aquesta web, en compliment del Reial decret-llei 13/2012. Si continua navegant considerem que accepta l'ús de cookies.","dismiss":"Acepto","theme":"dark-bottom"};
	</script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
  </head>

  <body id="page-top">

    <!-- Aquí és el Menú  -->
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
              <a class="nav-panel js-scroll-trigger" href="mostraj.php">Mostrar Jugadors </a>	
            </li>
            <li class="nav-item">
              <a class="nav-panel js-scroll-trigger" href="logout.php">Sortir </a>	
            </li>          
          </ul>
        </div>
      </div>
    </nav>
    
<!-- Aquest es el formulari de introduir els jugadors -->
	<section id="projects" class="projects-section bg-light">
      <div class="container">
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
	 <div class="info"><img src="img/info.png" style="width:10%"> Introdueix ara la informació dels teus jugadors. <br>
	 Mitjançant un fitxer csv o individualment.

	</div><br>
		<form  action="php/import.php" method="post" name="upload_excel" enctype="multipart/form-data">
			<div class="form-group">
	<label class="col-md-6 control-label" for="filebutton">Selecciona el fitxer .csv</label>
			<input type="file" name="sel_file" size="20">
           </div>                        
                                                   
     <button class="btn" type="submit" id="submit" name="Import" style="background:#e88033;margin-bottom:20px;margin-left:25%">Enviar</button>                                                                
        </form>
        
            <form role="form" name="jugadors" action="php/noujugador.php" method="post">
		<div class="form-group">		    
			<input type="text"  id="nom" name="nom" maxlength="20" placeholder="Nom Jugador">
		</div>
		<div class="form-group">		    
			<input type="text"  id="cognom" name="cognom" maxlength="20" placeholder="Cognom Jugador">
		</div>
		<div class="form-group">		    
			<input type="tel"  id="telefon" name="telefon" maxlength="9" pattern="^[6][0-9]{8}" placeholder="Telèfon Jugador">
		</div>
		<div class="form-group">		    
			<input type="text"  id="msg" name="msg" maxlength="50" placeholder="Missatge què veurà el Jugador">
		</div>
			<input id="enviar" name="jugadors" type="submit" value="Nou Jugador">
	</form>
          </div>         
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

