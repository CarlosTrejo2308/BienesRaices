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
	<link rel="stylesheet" href="cardscss.css">
</head>
<body>
	<div class="container-fluid">
		<?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container">
				<div class="row">

					<?php

					$resultados = $_SESSION['resultado'];

					foreach ($resultados as &$casa) {
						$arrr = explode("|", $casa);
						//echo $arrr[7];

						$html = "<div class=\"row\">
							<div class=\"card\">
								<img src=\"../includes/img/$arrr[0].jpg\" width=\"70%\">
							</div>
							<div class=\"card\">
								<p class=\"card-text\">Autor: $arrr[1] <br> Vendido: $arrr[2] <br> Cuartos: $arrr[3] <br> Banos: $arrr[4] <br> Precio: $ $arrr[5]</p>
							</div>
							 <div class=\"card\">
								$arrr[6]
								<p>$arrr[7], $arrr[8], $arrr[9]</p>
							</div>
						</div>";
						$dom = new DomDocument();
						$dom->loadHTML($html);
						echo $dom->saveHTML();

						echo "<br>";
					}


					 ?>

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
<?php include_once "../includes/js_incluidos.php";?>
</html>
