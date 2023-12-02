<?php
    require "classes/Url.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Alex Gois</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div id="page">
		<a href="#" class="js-colorlib-nav-toggle nav-toggle"><i></i></a>

		<!-- ASIDE -->
		<aside id="aside" role="complementary" class="js-fullheight text-center">
			<h1 id="logo">
				<a href="<?php echo URL::getBase(); ?>inicio">
				    <img src="img/logo_alex.svg" alt="" width="190px">
				</a>
			</h1>
			<nav id="main-menu" role="navigation">
				<ul>
					<li><a href="<?php echo URL::getBase(); ?>inicio">Início</a></li>						
					<li><a href="<?php echo URL::getBase(); ?>quemsoueu">Alex Gois</a></li>							
					<li><a href="<?php echo URL::getBase(); ?>projetos">Projetos</a></li>																			
					<li><a href="<?php echo URL::getBase(); ?>identidadevisual">ID Visual</a></li>						
					<li><a href="<?php echo URL::getBase(); ?>atividades">Atividades</a></li>					
					<li><a href="<?php echo URL::getBase(); ?>ilustracao">Ilustração</a></li>	
					<li><a href="<?php echo URL::getBase(); ?>contato">Contato</a></li>
				</ul>
			</nav>			 
					
					
			<div class="footer">
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center">
							<a href="https://github.com/ragnargois" target="_blank">
							    <i class="icon-github"></i>
							</a>
					    </li>
						<li class="d-flex align-items-center jusitfy-content-center">
							<a href="https://www.behance.net/alexgois1" target="_blank">
								<i class="icon-behance"></i>
							</a>
						</li>												
						<li class="d-flex align-items-center jusitfy-content-center">
							<a href="https://www.linkedin.com/" target="_blank">
								<i class="icon-linkedin"></i>
							</a>
						</li>												
						<li class="d-flex align-items-center jusitfy-content-center">
							<a href="https://www.instagram.com/ragnar.gois/" target="_blank">
								<i class="icon-instagram"></i>
							</a>
						</li>
						<li class="d-flex align-items-center jusitfy-content-center">
							<a href="https://api.whatsapp.com/send?phone=5513974093297&text=Texto%20aqui" target="_blank">
								<i class="icon-whatsapp"></i>
							</a>
						</li>


					</ul>
				</div>
			</div>
		</aside> <!-- END ASIDE -->
		
    <div id="main">

		    
			 
	    <?php
            $inicio = Url::getURL( 0 );

            if( $inicio == null )
                $inicio = "inicio";

            if( file_exists( "paginas/" . $inicio . ".php" ) )
                require "paginas/" . $inicio . ".php";
            else
                require "paginas/404.php";
        ?>

		 
        <footer class="ftco-footer ftco-bg-dark ftco-section">
            <div class="container px-md-5">
                    <div class="row mb-5">
                        <div class="col-md">
	                        <div class="ftco-footer-widget mb-4">            	
		                        <span class="icon icon-whatsapp"> </span> <span class="text">13 974093297</span><br> 
		                        <span class="icon icon-envelope"> </span> <span class="text">contato@alexgois.com.br</span>	            
	                        </div>
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-md-12">
	                        <p>
					            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
					             | UI - Alex Gois
	                        </p>
	                    </div>
                    </div>
		        </div>	
            </div>
        </footer>
	    
    </div><!-- END -->

</div><!-- END PAGE -->

  <!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
	    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
	</svg>
</div>



  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
 