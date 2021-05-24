<html>
<head>
	  <!-- CSS -->
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/fontawesome.css" rel="stylesheet">
  	  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/brands.css" rel="stylesheet">
  	  <link href="<?php echo get_template_directory_uri(); ?>/fontawesome/css/solid.css" rel="stylesheet">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	  

	  <!-- JQUERY -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/fontawesome.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	  <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
  	  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
  	  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
		

	  <meta charset="UTF-8">	  
	  <meta name="description" content="TQ Motors - Loja de carros, mecânica e espelhamentos">
	  <meta name="keywords" content="venda carros,seguro,japão">
	  <meta name="author" content="Mantis Project">
	  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">


	  <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png"/>


	  <title>TQ Motors<?php wp_title(); ?></title>


	  <script type="text/javascript">
		wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
	  </script>


	<?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>



</head>
<body>

	<header class="top-header bg-active" id="top-header-2">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-9 fadeInLeft animated wow">
	                <div class="list-inline top-header">
	                    <a href="/#maps"><i class="fas fa-map-marker-alt"></i>101-1 SUMIYOSHI, UEDA, NAGANO</a>
	                    <a href="tel:066-97050-888033"><i class="fas fa-phone"></i>066-97050-888033</a>
	                    <a target="_blank" href="https://api.whatsapp.com/send?phone=8109042302223&text=Ol%C3%A1%27%20entro%20em%20contato%20pelo%20site"><i class="fab fa-whatsapp"></i>WHATSAPP</a>
	                    <a target="_blank" href="http://m.me//Tqmotor.jp"><i class="fab fa-facebook-messenger"></i>MESSENGER</a>
	                </div>
	            </div>
	            <div class="header-weglot col-md-3">
	                <div id="weglot_here"></div>
	            </div>
	        </div>
	    </div>
	</header>
	<header>
		<!-- Second navbar for profile settings -->
		    <nav class="navbar navbar-inverse">
		      <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header col-sm-4">
		          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-4"> 
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand fadeInLeftBig animated wow" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo1.png"></a>
		        </div>
		    
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse fadeInRight animated wow col-sm-8" id="navbar-collapse-4">
		          <ul class="nav navbar-nav navbar-right">
		            <li><a href="/">HOME</a></li>
		            <li><a href="/#produtos">SERVIÇOS</a></li>
		            <li><a href="/listings">CARROS</a></li>
		            <li><a href="/#empresa">SOBRE</a></li>
		            <li><a href="/seguros">SEGUROS</a></li>
		          </ul>
		        </div><!-- /.navbar-collapse -->
		      </div><!-- /.container -->
		    </nav><!-- /.navbar -->
		</div><!-- /.container-fluid -->
	</header>


