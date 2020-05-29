<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "bienesbd";

$conn = mysqli_connect( $dbServername, $dbUsername, $dbPassword, $dbName );
session_start();

function borrar($id)
{
   $sql = "delete from casas where casasID = $id";
   mysqli_query($conn, $sql);
   echo "Se borro el elemento $id";
}

function ver($id)
{
  include_once '../models/dbh.php';
  echo "Mostrando el elemento: $id<br>";
  $sql = "select * from casas where casasID = $id";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc( $result );

  $message = "Casa ID: " . $row['casasID'] . "  Vendido: " . $row['sold'] . " Precio: $" . $row['price'] . " Recamaras: " . $row['rooms'] . " Banos: " . $row['bathrooms'];
  //echo $message;

  session_start();
  $_SESSION['mensaje'] = $message;
  header("Location: ../views/data_table.php");
  //echo "<script type='text/javascript'>alert('$message');</script>";
}

function modificar($id)
{
   echo "Se modifico el elemento $id";
}


if(array_key_exists('b3',$_POST)){
   borrar(3);
}
if(array_key_exists('b2',$_POST)){
   borrar(2);
}
if(array_key_exists('b1',$_POST)){
  borrar(1);
}

if(array_key_exists('m3',$_POST)){
   modificar(3);
}
if(array_key_exists('m2',$_POST)){
   modificar(2);
}
if(array_key_exists('m1',$_POST)){
   modificar(1);
}

if(array_key_exists('v3',$_POST)){
   ver(3);
}if(array_key_exists('v2',$_POST)){
   ver(2);
}if(array_key_exists('v1',$_POST)){
   ver(1);
}


 ?>
