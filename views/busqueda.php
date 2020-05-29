<!DOCTYPE html>
<html>
<head>
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";
	session_start();
	include_once '../models/dbh.php';?>
	<title>www.Multicasa/agencia_inmoviliaria/busqueda_resultados.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/busqueda.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
	<?php
	// Aqui obtenemos la variable de la pagina lookup y la imprimimos
	$resultados = $_SESSION['resultado'];

	foreach ($resultados as &$valor) {
		echo $valor;
	}

	 ?>
	<div class="container-fluid">
		<?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container">
				<div class="row">
					<div class="photo">
						<img src="../includes/img/house1.jpg">
						<?php
							echo("This is a photo");

						?>

						<!-- Aqui ponemos el embedded de google maps -->
						<p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3600.2020140005457!2d-100.93931268487543!3d25.531646983741652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDMxJzUzLjkiTiAxMDDCsDU2JzEzLjciVw!5e0!3m2!1sen!2smx!4v1590715283640!5m2!1sen!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</p>

						<p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21223.125789040376!2d-100.95906143314131!3d25.474036254138124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86886d35b3ecf4f7%3A0x961833e02e71504!2sVirreyes%20Residencial%2C%2025230%20Saltillo%2C%20Coahuila!5e0!3m2!1sen!2smx!4v1590715615023!5m2!1sen!2smx" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</p>
					</div>
				</div>

				<div class="Acciones">
					<div class="row">
						<div class="A_button_C">
							<button>Comprar</button>
						</div>
						<div class="A_button_P">
							<button>Generar PDF</button>
						</div>
						<div class="A_status">
							<label>Status: <?php echo'<i style="color:green;">Status</i>';?></label>
						</div>
					</div>

					<div class="row">
						<div class="space">
							<br>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="Data">
						<h3>Casas en Monterrey.</h3>
						<p>
							<?php
								echo"Este es un texto";
							?>
						</p>
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
		</div>

		<div class="row">
			<?php include_once "../includes/down_bar.php"?>
		</div>

	</div>
</body>
</html>
