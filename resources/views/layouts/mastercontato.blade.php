<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
	<meta name="author" content="Ansonika">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>Contato</title>
	<script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>

<header class="header menu_2">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div> -->
		<div id="logo">
			<a href="index.php"><img src="img/logoEvolutionHeader-min.png" width="150" height="70" data-retina="true" alt=""></a>
		</div>
		<div class="aside-menu">
			<ul id="top_menu">
				<li><a href="login.php" class="login">Login</a></li>
				<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
				<!-- <li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li> -->
			</ul>
			<!-- /top_menu -->
			<a href="#menu" class="btn_mobile">
				<div class="hamburger hamburger--spin" id="hamburger">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<nav id="menu" class="main-menu">
				<ul>
					<li><span><a href="/">Home</a></span></li>
					<li><span><a href="/cursos">Cursos</a></span>
						<!-- <ul>
							<li><a href="courses-grid.html">Courses grid</a></li>
							<li><a href="courses-grid-sidebar.html">Courses grid sidebar</a></li>
							<li><a href="courses-list.html">Courses list</a></li>
							<li><a href="courses-list-sidebar.html">Courses list sidebar</a></li>
							<li><a href="course-detail.html">Course detail</a></li>
							<li><a href="course-detail-2.html">Course detail working form</a></li>
							<li><a href="admission.html">Admission wizard</a></li>
							<li><a href="teacher-detail.html">Teacher detail</a></li>
						</ul> -->
					</li>
					<li><span><a href="#0">Sobre</a></span></li>
					<li><span><a href="/contato">Contato</a></span></li>
					<li><a id="myBtnlogin" class="button-access myBtnlogin">Acesse sua conta</a></li>
					<!-- <li><span><a href="#0">Paginas</a></span> -->
						<!-- <ul>
							<li><a href="#0">Menu 2</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="login.html">Login</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="contacts.html">Contacts</a></li>
							<li><a href="404.html">404 page</a></li>
							<li><a href="agenda-calendar.html">Agenda Calendar</a></li>
							<li><a href="faq.html">Faq</a></li>
							<li><a href="help.html">Help</a></li>
						</ul> -->
					</li>
					<!-- <li><span><a href="#0">Extra Pages</a></span>
						<ul>
							<li><a href="media-gallery.html">Media gallery</a></li>
							<li><a href="cart-1.html">Cart page 1</a></li>
							<li><a href="cart-2.html">Cart page 2</a></li>
							<li><a href="cart-3.html">Cart page 3</a></li>
							<li><a href="pricing-tables.html">Responsive pricing tables</a></li>
							<li><a href="coming_soon/index.html">Coming soon</a></li>
							<li><a href="icon-pack-1.html">Icon pack 1</a></li>
							<li><a href="icon-pack-2.html">Icon pack 2</a></li>
							<li><a href="icon-pack-3.html">Icon pack 3</a></li>
							<li><a href="icon-pack-4.html">Icon pack 4</a></li>
						</ul>
					</li> -->
				</ul>
			</nav>
		</div>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
		<div id="modal-login" class="modal-login">

  <!-- Modal content -->
  <div class="modal-content-login">
    
	<span class="close-login">×</span>
	<div style="text-align:center;"><img class="logo-form" src="img/logoEvolutionHeader-min.png"></div>
	<h4>Acesse sua conta na Evolution</h4>
	<div class="chamaerro" id="errolog"><span>Email e senha não conferem</span></div>
    <form id="formlogin" method="post">    
        <label for="email">Email:</label><br>
		<div class="input-login">
		<i style="color: black; padding: 3px;" class="fas fa-at"></i>
        <input id="email" name="name" type="email"><br>
		</div>
		<label for="senha">Senha:</label><br>
		<div class="input-login">
		<i style="color: black; padding: 3px;" class="fas fa-key"></i>
        <input id="senha" name="email" type="password">
		</div>
		<div class="button-login" style="text-align:center;">
		<button type="submit" id="send-login" name="enviar">Enviar</button>
		</div>
	</form>
	<span class="chama"><a href="register.php">Não possui conta? Crie a sua agora!</a></span>
	<div style="display: none;" class="redireciona" id="loading-login"><i class="fas fa-spinner fa-spin fa-1x"></i>Redirecionando...</div>
  </div>

</div>
</header>
@yield('content')
<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logoEvolutionFooter-min.png" width="150" height="80" data-retina="true" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
					<div class="follow_us">
						<ul>
							<li>Redes Socias</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="#0">Admission</a></li>
						<li><a href="#0">About</a></li>
						<li><a href="#0">Login</a></li>
						<li><a href="#0">Register</a></li>
						<li><a href="#0">News &amp; Events</a></li>
						<li><a href="#0">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contato</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@evolution.com.br"><i class="ti-email"></i> info@evolution.com.br</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Email">
							<input type="submit" value="Enviar" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Termos e condições</a></li>
						<li><a href="#0">Privacidade</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© <?php echo date("Y"); ?> Evolution</div>
				</div>
			</div>
		</div>
		<!-- Jquery -->
		<!-- <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script> -->
		<!-- Login Modal -->
		<!-- <script type="text/javascript" src="js/loginmodal.js"></script> -->
	</footer>
            <script src="js/jquery-2.2.4.min.js"></script>
            <script src="js/common_scripts.js"></script>
            <script src="js/main.js"></script>
            <script src="assets/validate.js"></script>

            	<!-- SPECIFIC SCRIPTS -->
	        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
	        <script type="text/javascript" src="js/mapmarker.jquery.js"></script>
	        <script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>
    </body>
</html> 

