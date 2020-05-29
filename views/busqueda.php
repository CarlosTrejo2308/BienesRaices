<!DOCTYPE html>
<html>
<head lang="es">
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
	<div class="container-fluid">
		<?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container">

					<?php

					$resultados = $_SESSION['resultado'];

					foreach ($resultados as &$casa) {
						$arrr = explode("|", $casa);
						//echo $arrr[7];
						if ($arrr[2] == 0){
							$status = "Disponible";
						}
						else{
							$status = "Vendida";
						}

						$html = "
						<div id=\"elemento\">
							<div class=\"row\">
									<hr><br>
									<div class=\"foto\">
										<img src=\"../includes/img/$arrr[0].jpg\">
									</div>
									<hr>
								</div>
								<div class=\"row\">
									<div class=\"decripcion\">
										<p>Vendedor: $arrr[1] <br> Cuartos: $arrr[3] <br> Banos: $arrr[4] <br> Precio: $ $arrr[5]</p>
									</div>
									 <div class=\"mapa\">
										<p>$arrr[7], $arrr[8], $arrr[9]</p>
									</div>
							</div>
						</div>

						<div class=\"Acciones\">
 						 <div class=\"row\">
 							 <div class=\"A_button_C\">
 								 <input class=\"btn btn-success\" type=\"button\" id=\"buy\" value=\"Comprar\">
 							 </div>
 							 <div class=\"A_button_P\">
 								 <input class=\"btn btn-success\" type=\"button\" id=\"pdfr\" value=\"Generar PDF\">
 							 </div>
 							 <div class=\"A_status\">
 								 <label>Status: <i style=\"color:green;\">$status</i></label>
 							 </div>
 						 </div>
 					 </div>";
						$dom = new DomDocument();
						$dom->loadHTML($html);
						echo $dom->saveHTML();

						echo "<br>";
					}


					 ?>
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
<script src="dependencias/busqueda.js"></script>
</html>
