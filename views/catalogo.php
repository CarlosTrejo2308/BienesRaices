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
</head>
<body>
	<div class="container-fluid">
		<div class="topbar">
			<div class="row">
					<?php include_once "../includes/menu_bar.php";?>
			</div>
			<div class="row">
				<div class="Logo">
					<img src="../includes/img/logo.png"></img>
				</div>
				<div class="Telefonos">
					<img src="../includes/img/bloque call now.png">
				</div>
			</div>
			<div class="row">
				<div class="space">
					<br>
				</div>
			</div>
		</div>
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
		<div class="row">
			<div class="Data">
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
			<div class="Busqueda">
				<div class="row">
					<div class="lupa">
						<img src="../includes/img/img_lupa.png">
					</div>
					<div class="encuentra_tu_casa">
						<img src="../includes/img/encuentra tu  futura propiedad .png">
					</div>
				</div>
				<br>
				<label>Ciudad y Estado, o C.P.</label>
				<input type="text" name="CEoCP">
				<label>Rango De Busqueda</label><br>
				<select>
					<option value="0">Sin Rango</option>
				</select>
				<label>Rango de Precio De : - A:</label>
				<div class="row">
					<div class="De">
						<select>
							<option value="0">Todos</option>
						</select>
					</div>
					<div class="A">
						<select>
							<option value="0">Todos</option>
						</select>
					</div>
				</div>
				<label>Recámara(s)</label><br>
				<select>
					<option value="0">No importa.</option>
				</select>
				<br><label>Baño(s)</label><br>
				<select>
					<option value="0">No importa.</option>
				</select>
				<div class="row">
					<div class="button">
						<button>Buscar</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="downmenu_bar">
				<img src="../includes/img/logotipo.png">
				<p>Inicio : Compra : Construir : Venta : Mudanzas : Seguros : Contactos</p>
			</div>
			<div class="downmenu_bar2">
				<p>Bienes Raíces Multicasa @ 2012<br>Pólíticas de Privacidad</p>
			</div>
		</div>

	</div>
</body>
<script src="../includes/js/jquery-3.4.1.js"></script>
<script src="dependencias/owl.carousel.min.js"></script>
<script src="dependencias/sliderb.js"></script>
</html>