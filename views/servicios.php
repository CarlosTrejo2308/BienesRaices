<!DOCTYPE html>
<html>
<head>
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/servicios.com</title>
	<link rel="stylesheet" href="css/servicios.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
	<div class="container-fluid">

    <?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container">

        <div class="row">
          <div class="title">
            <legend class="text-center header">Servicios</legend>
          </div>
          <hr>
        </div>

        <div class="row">
          <div class="servicio">
            <h4><a href="catalogo.php">Compra</a></h4>
          </div>

          <div class="s_imagen">
            <img src="../includes/img/house1.jpg">
          </div>
          <hr>
        </div>


        <div class="row">
          <div class="s_imagen">
            <img src="../includes/img/house2.jpg">
          </div>

          <div class="servicio">
            <h4><a href="catalogo.php">Construir</a></h4>
          </div>
          <hr>
        </div>

        <div class="row">
          <div class="servicio">
            <h4><a href="catalogo.php">Venta</a></h4>
          </div>

          <div class="s_imagen">
            <img src="../includes/img/house3.jpg">
          </div>
          <hr>
        </div>

        <div class="row">
          <div class="s_imagen">
            <img src="../includes/img/house4.jpg">
          </div>

          <div class="servicio">
            <h4><a href="catalogo.php">Mudanzas</a></h4>
          </div>
          <hr>
        </div>

        <div class="row">
          <div class="servicio">
            <h4><a href="requisitos.php">Seguros</a></h4>
          </div>

          <div class="s_imagen">
            <img src="../includes/img/house5.jpg">
          </div>
          <hr>
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
</html>
