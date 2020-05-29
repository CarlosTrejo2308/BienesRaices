<!DOCTYPE html>
<html>
<head>
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/master.com</title>
	<link rel="stylesheet" href="css/master.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
	<div class="container-fluid">
		<?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container" align="center">
				<div class="row">
					<div class="img_header">
						<img src="../includes/img/boca-raton-exterior.png">
					</div>
				</div>

				<legend class="text-center header"><img src="../includes/img/welcome.PNG" alt="Bienvenido"></legend>

				<div class="row">
					<div class="colash">
						<img src="../includes/img/colash_min_casas.png">
					</div>
					<div class="texto">
						<h2><br>Bienvenido Administrador</h2>
					</div>
				</div>
				<div class="row">
					<div class="Middle_content">
						<h3><br><hr><br>Estas son tus herramientas disponibles: </h3>
						<br>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="texto" align="center">
						<h4><br><a href="data_table.php">Base de Datos</a></h4>
						<h4><a href="dashboard.php">Dashboard de Estadísticas de las Ventas</a></h4>
					</div>
					<div class="colash">
						<br>
						<img src="../includes/img/colash_min_casas.png">
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
			<hr>
			<?php include_once "../includes/down_bar.php"?>
		</div>

	</div>
</body>
<?php include_once "../includes/js_incluidos.php";?>
</html>
