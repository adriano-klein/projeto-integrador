
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Contato</title>

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
	
    <?php 
        include 'header.php'
    ?>
	
	
	<main>
		<section id="hero_in" class="contacts">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Contato Evolution</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Endereço</h4>
						<span>Avenida Dr. Cardoso de Melo, 90 - Vila Olimpia, São Paulo-SP, 04548-000</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>E-mail</h4>
						<span>contato@evolution.com.br<br><small>Segnda - sexta 9:00 - 18:00</small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Nossos telefones</h4>
						<span>(11) 94450-1109<br><small>Segunda - Sexta 9:00 - 18:00</small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_120_95">
				<div class="row justify-content-between">
					<div class="col-lg-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29248.130241563224!2d-46.68468744927997!3d-23.603749071739877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7feb4519%3A0x739f0ddb0439cf94!2sDigital+House+S%C3%A3o+Paulo!5e0!3m2!1spt-BR!2sbr!4v1547605181466" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<!-- /map -->
					</div>
					<div class="col-lg-6">
						<h4>Envie a sua mensagem</h4>
						<p>Retornaremos prontamente</p>
						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content">Primeiro nome</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="lastname_contact" name="lastname_contact">
										<label class="input_label">
											<span class="input__label-content">Sobrenome</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content">Endereço de e-mail</span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content">Telefone</span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content">Escreva sua mensagem</span>
									</label>
							</span>
							<span class="input">
									<input class="input_field" type="text" id="verify_contact" name="verify_contact">
									<label class="input_label">
									<span class="input__label-content">Você é humano? 3 + 1 =</span>
									</label>
							</span>
							<p class="add_top_30"><input type="submit" value="Enviar" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
    <?php
        include 'footer.php';
    ?>
	
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_search"></i>
			</button>
		</form>
	</div><!-- / Search Menu -->
	
	<!-- COMMON SCRIPTS -->
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