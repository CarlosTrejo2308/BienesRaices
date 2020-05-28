<!DOCTYPE html>
<html>
<head>
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/busqueda_resultados.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/busqueda.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
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
			</div>
		</div>

		<div class="row">
			<?php include_once "../includes/down_bar.php"?>
		</div>

	</div>
</body>
</html>
