<!DOCTYPE html>
<html>
<head>
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/registro.com</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/standar.css">
	<link rel="stylesheet" href="css/registro.css">
</head>
<body>
	<div class="container-fluid">
		<div class="topbar">
			<?php include_once "../includes/top_bar.php"?>
		</div>

		<div class="row">
			<div class="container" style="margin-top: 65px !important;">
				<div class="header">
					<h2>Formulario de registro</h2>
				</div>

				<p>Complete los datos para registrarse como cliente.</p>

				<div class="bg">
					<form action="../controller/newuser.php" method="post" onsubmit="">
						<div class="row">
							<div class="col-25">
								<label for="lnombre">Nombre:</label>
							</div>
							<div class="col-75">
								<input type="text" id="inombre" name="inombre" maxlength="30" placeholder="Ingrese su nombre" class="mayusculas">
							</div>
						</div>

						<div class="row">
							<div class="col-25">
								<label for="lpaterno">Primer Apellido:</label>
							</div>
							<div class="col-75">
								<input type="text" id="ipaterno" name="ipaterno" maxlength="30" placeholder="Ingrese su apellido paterno" class="mayusculas">
							</div>
						</div>

						<div class="row">
							<div class="col-25">
								<label for="lnacimiento">Fecha de Nacimiento:</label>
							</div>
							<div class="col-75">
								<input type="date" id="inacimiento" name="inacimiento">
							</div>
						</div>

						<div class="row">
							<div class="col-25">
								<label for="lemail">Correo:</label>
							</div>
							<div class="col-75">
								<input type="email" id="iemail" name="iemail" maxlength="100" placeholder="Ingrese su Correo Electrónico">
							</div>
						</div>

						<div class="row">
							<div class="col-25">
								<label for="lpsswd">Contraseña:</label>
							</div>
							<div class="col-75">
								<input type="text" id="ipasswd" name="ipasswd" placeholder="Ingrese su Contraseña">
							</div>
						</div>

						<div class="row">
							<div class="boton">
								<input type="submit" value="Registrar" class="boton_menu">
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
		<br>
		<br>

		<div class="row">
			<?php include_once "../includes/down_bar.php"?>
		</div>

	</div>
</body>
</html>
