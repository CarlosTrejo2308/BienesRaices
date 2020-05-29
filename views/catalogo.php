<!DOCTYPE html>
<html>
<head>
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/catalogo.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
	<link rel="stylesheet" href="css/catalogo.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
	<div class="container-fluid">
		<?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container">
				<div class="row">
					<div class="slider">
						<div class="wrapper">
							<div class="owl-carousel owl-theme">
							    <div class="item"><img src="../includes/img/house0.jpg"></div>
							    <div class="item"><img src="../includes/img/house1.jpg"></div>
							    <div class="item"><img src="../includes/img/house2.jpg"></div>
							    <div class="item"><img src="../includes/img/house3.jpg"></div>
							    <div class="item"><img src="../includes/img/house4.jpg"></div>
							    <div class="item"><img src="../includes/img/house5.jpg"></div>
							</div>
						</div>
					</div>
				</div>
				<br>

				<div class="row">
					<div class="imagen">
						<img src="../includes/img/house0.jpg">
					</div>
					<div class="texto">
						<h3>Casas en Monterrey.</h3>
						<p>Esta es una gran oportunidad para comprar una casa.</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="imagen">
						<img src="../includes/img/house1.jpg">
					</div>
					<div class="texto">
						<h3>Casas en Ciudad de México.</h3>
						<p>Esta es una gran oportunidad para comprar una casa.</p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="imagen">
						<img src="../includes/img/house2.jpg">
					</div>
					<div class="texto">
						<h3>Casas en Cancún.</h3>
						<p>Esta es una gran oportunidad para comprar una casa.</p>
					</div>
				</div>
				<hr>

				<div class="row">
					<div class="imagen">
						<img src="../includes/img/house3.jpg">
					</div>
					<div class="texto">
						<h3>Casas en Jalisco.</h3>
						<p>Esta es una gran oportunidad para comprar una casa.</p>
					</div>
				</div>

			</div>

			<div class="side_bar">
				<?php include_once  "../includes/side_menu.php"?>
				<hr>

			<div class="Busqueda1">
				<?php include_once  "../includes/Busqueda.php"?>
			</div>

			<div class="side_info">
				<?php include_once "../includes/info.php"?>
			</div>
			
		</div>
		<hr>
	</div>
	<div class="row">
		<?php include_once "../includes/down_bar.php"?>
	</div>
</div>
</body>
<?php include_once "../includes/js_incluidos.php";?>
<script src="dependencias/owl.carousel.min.js"></script>
<script src="dependencias/sliderb.js"></script>
</html>
