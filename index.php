<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
	<link rel="icon" type="image/png" href="img/icon.png" />
    <title>Convocam</title>
    

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
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Convocam</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5">La millor opció per ha facilita la vida als entrenadors de futbol.</h2>
          <a href="#about" class="btn btn-primary js-scroll-trigger">Llegir més</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
			
          <div class="col-lg-8 mx-auto">
           
            <h2 class="text-white mb-4">Organitza't</h2>
            <p class="text-white-50">Gràcies a CONVOCAM tindràs l'opció de poder convocar als teus jugadors pel pròxim partit. Estalvia't hores de mal de cap gràcies a la nostra implementació amb WhatsApp. Serà molt més fàcil i estalviaràs molt de temps en això.</p>
          
          </div>
        </div>
       
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
  

       

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
           <img class="img-fluid" src="img/logo.png" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Convocam</h4>
                  <p class="mb-0 text-white-50">Està enfocada a entrenadors de diferents nivells no professionals. És una gran eina per ajudar a organitzar els entrenadors gràcies a la seva facilitat i senzillesa es fa tot molt més fàcil per a tothom.</p</p>
                  <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
              </div>
            </div>
          </div>
        </div>
 <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/what.jpg" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">API WhatsApp</h4>
                  <p class="mb-0 text-white-50">Gràcies a la nostra implementació amb l'API de WhatsApp podràs enviar un missatge avisant si està convocat o no, entre altres opcions.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
  
    <!-- Signup Section -->
    <section id="signup" class="signup-section">
       <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Direcció</h4>
                <hr class="my-4">
                <div class="small text-black-50">43006 Tarragona, España Cat</div>
              </div>
            </div>
          </div>
					
					
					
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Correu electrònic</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#email">Convocam@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
		
          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Telèfon</h4>
                <hr class="my-4">
                <div class="small text-black-50">+34 777 77 77 77</div>
              </div>
            </div>
          </div>
        </div>

        
      </div>
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
