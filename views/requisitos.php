<!DOCTYPE html>
<html>
<head lang="es">
	<?php include_once "../includes/meta_tags.php";
	include_once "../includes/includes_css.php";?>
	<title>www.Multicasa/agencia_inmoviliaria/requisitos.com</title>
  <link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <link rel="stylesheet" href="css/requisitos.css">
	<link rel="stylesheet" href="css/standar.css">
</head>
<body>
	<div class="container-fluid">

    <?php include_once "../includes/top_bar_alt.php"?>

		<div class="row">
			<div class="container">
        <div class="row">
          <div class="title">
            <h2>Requisitos</h2>
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
          <div class="complementary_tlong">
						<p>Ser derechohabiente del Infonavit con relación laboral vigente
            <br>
              Contar con 116 puntos
              <br>
              Realizar un presupuesto familiar para analizar tu capacidad de pago
              <br>
              Responder el cuestionario API para recibir asesoría personalizada sobre lo que más te conviene en el uso de tu crédito
              <br>
              Cursar en línea el taller gratuito “Saber para decidir”
              <br>
              Proporcionar dos referencias personales y brindar sus datos para localizarlos

            </p>
            <h5>Además de:</h5>
						<p>
              Las condiciones de tu crédito son definidas por tu precalificación, que a su vez es determinada por tu edad y salario, tu ahorro en la Subcuenta de Vivienda y los bimestres que haz cotizado continuamente.
              <br>
              El comportamiento de pago de aportaciones de tu patrón influye.
              <br>
              Los requisitos y pasos dependen del producto y destino que escojas.
              <br>
              Aplica para todos los niveles salariales.
              <br>
              La tasa anual de 12% es fija.
              <br>
              El máximo que descontarán a tu nómina cada mes será del 30% de tu salario integrado, aunque debes revisar los pormenores.
              <br>
              Los gastos por conceptos de trámites son el 3% del monto de tu crédito, aunque también debes cerciorarte de algunas especificaciones.
            </p>
            <h4 text-align="center">Para hacer uso de nuestros servicios es necesario tener una cuenta.</h4>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="options">
            <div class="reg">
              <button type="button" class="btn btn-primary" onclick="location.href='registro.php'">Registrarse</button>
            </div>
            <div class="log">
              <button type="button" name="login" id="login" data-toggle="modal" data-target="#login_modal" class="btn btn-primary">login</button>
            </div>
          </div>
        </div>
        <br>

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
  <!-- modal para el login -->
  <div id="login_modal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                <legend class="text-center header">
                     <h4 class="modal-title"></h4>
                     </legend>
                     <button type="button" class="close" data-dismiss="modal"></button>

                </div>
                <div class="modal-body">
                     <form method="post" id="login_form">
                          <label>Nombre de Usuario:</label>
                          <input type="text" name="f_nombre" id="f_nombre" class="form-control" />
                          <br />
                          <label>Contraseña:</label>
                          <input type="text" name="f_contrasena" id="f_contrasena" class="form-control" />
                          <br />
                          <input type="submit" name="loginto" id="loginto" value="Login" class="btn btn-success" />
                     </form>

                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>
</body>
<?php include_once "../includes/js_incluidos.php";?>
<script src="dependencias/modal_login.js"></script>
<script src="dependencias/owl.carousel.min.js"></script>
<script src="dependencias/sliderb.js"></script>
</html>
