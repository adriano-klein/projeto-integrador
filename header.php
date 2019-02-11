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
					<li><span><a href="index.php">Home</a></span></li>
					<li><span><a href="cursos.php">Cursos</a></span>
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
					<li><span><a href="contato.php">Contato</a></span></li>
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
