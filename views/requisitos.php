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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <h5>Además de:</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
