<!DOCTYPE html>
<html>
<head>
  <?php include_once "../includes/meta_tags.php"; ?>
  <title>www.Multicasa/agencia_inmoviliaria/datatable.com</title>
  <?php include_once "../includes/includes_css.php";?>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/standar.css">
</head>
<body>

<div class="container-fluid">
    <?php include_once "../includes/top_bar_alt.php"?>
</div>

<!--<div class="container-fluid">  -->
<div class="container" style="margin-top: 65px !important;">  
  <div class="form-group">
    <legend class="text-center header"><h2>Data Table para la Base de Datos de Casas.</h2></legend>
  </div>

  <?php
    include("../models/class_casas_dal.php");
    $obj_casas=new casas_dal;

    $result_casas = $obj_casas->get_lista_casas();

    if ($result_casas == NULL){

      print "<p>No se encontraron casas en venta.</p>";
    }
    else{
  ?>

  <div class="form-group col-md-12">
    <div align="left">  
      <button type="button" class="btn btn-primary">Volver.</button>  
    </div> 

    <div align="center">  
      <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_modal" class="btn btn-primary">Publicar Casa.</button>  
    </div> 

    <table id="lista_casas" class="table table-striped table-bordered" border="0">

			<thead class="text-capitalize">
        <tr>
          <th>ID Casa</th>
          <th>Status</th>
          <th>Vendedor</th>
          <th>Actualizar</th>
          <th>Ver</th> 
          <th>Eliminar</th>
        </tr>
      </thead>

      <tbody>
    		<?php
        	foreach ($result_casas as $key => $value) {
    		?>
        <tr>
    			<td><?=$value->getId_Casa();?></td>
    			<td><?=$value->getStatus_Casa();?></td>
          <td><?=$value->getVendedor_Casa();?></td>
          <td>
            <button class='update btn btn-success btn-sm' id='update_<?= $value->getId_Casa() ?>' data-id='<?= $value->getId_Casa() ?>' >Actualizar</button>
          </td>
          <td>
            <button class='ver btn btn-warning btn-sm' id='ver_<?= $value->getId_Casa() ?>' data-id='<?= $value->getId_Casa() ?>' >Ver</button>
          </td>
          <td>
            <button class='delete btn btn-danger btn-sm' id='del_<?= $value->getId_Casa() ?>' data-id='<?= $value->getId_Casa() ?>' >Eliminar</button>
          </td>
        </tr>
        
        <?php
          }//cierre de foreach
        ?>
      </tbody>
    </table>
  </div>

  <?php
    } // cierre del else
  ?>

  <?php include_once "../includes/js_incluidos.php"; ?>

  <div class="row">
      <hr>
      <?php include_once "../includes/down_bar.php"?>
  </div>

</div><!-- end container -->
</body>
<script src="dependencias/data_table.js"></script>
</html>

<div id="dataModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <legend class="text-center header">
          <h4 class="modal-title">Información de la Casa.</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </legend>
      </div>

      <div class="modal-body" id="detail"></div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>  
  </div>
</div>

<!-- modal para insertar y update -->
<div id="add_modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <legend class="text-center header">
          <h4 class="modal-title"></h4>
        </legend>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <form method="post" id="insert_form">
          <label>Foto de la Casa (url):</label>
          <input type="text" name="f_picture" id="f_picture" class="form-control" />
          <br />
          <input type="hidden" name="id_casa" id="id_casa" readonly="true" />
          <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>