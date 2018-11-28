<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>UDEMA | Modern Educational site template</title>

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
	
	<div id="page" class="theia-exception">
		
	<?php
		include "header.php";
	?>
	<!-- /header -->
	
	<main>
		<section id="hero_in" class="cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Your cart</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Payment</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Finish!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Item
									</th>
									<th>
										Discount
									</th>
									<th>
										Price
									</th>
									<th>
										Actions
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_1.jpg" alt="Image">
										</div>
										<span class="item_cart">Persius delenit has cu</span>
									</td>
									<td>
										0%
									</td>
									<td>
										<strong>24,71$</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_2.jpg" alt="Image">
										</div>
										<span class="item_cart">At deseruisse scriptorem</span>
									</td>
									<td>
										0%
									</td>
									<td>
										<strong>15,50$</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_3.jpg" alt="Image">
										</div>
										<span class="item_cart">Ea vel semper quaerendum</span>
									</td>
									<td>
										0%
									</td>
									<td>
										<strong>24,71$</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_4.jpg" alt="Image">
										</div>
										<span class="item_cart">Ei has exerci graecis</span>
									</td>
									<td>
										0%
									</td>
									<td>
										<strong>24,71$</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="#"><i class="icon-trash"></i></a>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-options clearfix">
							<div class="float-left">
								<div class="apply-coupon">
									<div class="form-group">
										<input type="text" name="coupon-code" value="" placeholder="Your Coupon Code" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn_1 outline">Apply Coupon</button>
									</div>
								</div>
							</div>
							<div class="float-right fix_mobile">
								<button type="button" class="btn_1 outline">Update Cart</button>
							</div>
						</div>
						<!-- /cart-options -->
					</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">69.00$</span>
							</div>
							<div class="add_bottom_30">Lorem ipsum dolor sit amet, sed vide <strong>moderatius</strong> ad. Ex eius soleat sanctus pro, enim conceptam in quo, <a href="#0">brute convenire</a> appellantur an mei.</div>
							<a href="cart-2.html" class="btn_1 full-width">Checkout</a>
							<a href="courses-grid-sidebar.html" class="btn_1 full-width outline"><i class="icon-right"></i> Continue Shopping</a>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	<?php
		include "footer.php";
	?>
	<!--/footer-->
	
	</div>
	<!-- page -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
  
</body>
</html>