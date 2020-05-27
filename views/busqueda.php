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
			<div class="photo">
				<img src="../includes/img/house1.jpg">
				<?php
					echo("This is a photo");
				?>
			</div>
		</div>

		<div class="row">
			<div class="contenido">
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

				<div class="Data">
					<h3>Casas en Monterrey.</h3>
					<p>
						<?php
							echo"Este es un texto";
						?>
					</p>
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
</html>