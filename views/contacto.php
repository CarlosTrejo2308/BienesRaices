<!DOCTYPE html>
<html>
<head lang="es">
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/requisitos.com</title>
  <link rel="stylesheet" href="css/contacto.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
	<div class="container-fluid">

    <?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container_A">
        <div class="frm">
          <form class='contacto'>
              <div><h6>Contactanos:</h6></div>
              <br>
              <div><label>Tu Nombre:</label><input type='text' value=''></div>
              <div><label>Tu Email:</label><input type='text' value=''></div>
              <div><label>Asunto:</label><input type='text' value=''></div>
              <div><label>Mensaje:</label><textarea rows='6'></textarea></div>
              <div><input type='submit' value='Envia Mensaje'></div>
          </form>
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
			<hr>
			<?php include_once "../includes/down_bar.php"?>
		</div>

	</div>
</body>
</html>
