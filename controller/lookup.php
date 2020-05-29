<?php
include_once '../models/dbh.php';
session_start();

$lugar = $_POST['CEoCP'];
$rango = $_POST['rango'];
$precioMin = $_POST['precio_min'];
$precioMax = $_POST['precio_max'];
$recamaras = $_POST['rooms'];
$banos = $_POST['baths'];

$all = "'$lugar', '$rango', '$precioMin', '$precioMax', '$recamaras', '$banos'";

$sql = "select usuarios.*, ubicacion.*, casas.*\n"
. "from casas\n"
. "INNER JOIN ubicacion ON casas.fk_ubicacionID = ubicacion.ubicacionID\n"
. "INNER JOIN usuarios ON casas.fk_usuarioID = usuarios.usuariosID\n"
. "WHERE";

// Lugar
if ($lugar != '') {
  $sql .= " ubicacion.country LIKE \"%$lugar%\" or ubicacion.state LIKE \"%$lugar%\" or ubicacion.city LIKE \"%$lugar%\"\n"
  . "AND ";
}


// Rango
if ( $rango != 0 ) {
  if ( $rango == 1 ) {
    $sql .= " ubicacion.distancia <= 5";
  }
  else if ( $rango == 2 ) {
    $sql .= " ubicacion.distancia <= 10";
  }
  else if ( $rango == 3 ) {
    $sql .= " ubicacion.distancia <= 20";
  }

  $sql .= "\n AND ";
}

// Precio min
if ( $precioMin != 0 ) {
  if ( $precioMin == 1 ) {
    $sql .= " casas.price >= 100000";
  }
  else if ( $precioMin == 2 ) {
    $sql .= " casas.price >= 500000";
  }
  else if ( $precioMin == 3 ) {
    $sql .= " casas.price >= 1000000";
  }
  else if ( $precioMin == 4 ) {
    $sql .= " casas.price >= 2000000";
  }

  $sql .= "\n AND ";
}

// Precio max
if ( $precioMax != 0 ) {
  if ( $precioMax == 1 ) {
    $sql .= " casas.price <= 100000";
  }
  else if ( $precioMax == 2 ) {
    $sql .= " casas.price <= 500000";
  }
  else if ( $precioMax == 3 ) {
    $sql .= " casas.price <= 1000000";
  }
  else if ( $precioMax == 4 ) {
    $sql .= " casas.price <= 2000000";
  }

  $sql .= "\n AND ";
}

// Recamaras
if ( $recamaras != 0 ) {
  if ( $recamaras == 1 ) {
    $sql .= " casas.rooms >= 3";
  }
  else if ( $recamaras == 2 ) {
    $sql .= " casas.rooms >= 4";
  }
  else if ( $recamaras == 3 ) {
    $sql .= " casas.rooms >= 5";
  }

  $sql .= "\n AND ";
}

// Banos
if ( $banos != 0 ) {
  if ( $banos == 1 ) {
    $sql .= " casas.bathrooms >= 1";
  }
  else if ( $banos == 2 ) {
    $sql .= " casas.bathrooms >= 1";
  }
  else if ( $banos == 3 ) {
    $sql .= " casas.bathrooms >= 2";
  }
  else if ( $banos == 4 ) {
    $sql .= " casas.bathrooms >= 3";
  }

  $sql .= "\n AND ";
}


$sql .= " 1 = 1;";
//echo $sql;

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


$resultCheck = mysqli_num_rows($result);

$array = array();

if ( $resultCheck > 0 ) {
  while ( $row = mysqli_fetch_assoc( $result ) ) {
    $str = "";
    $str .= $row['picture'] . "|" . $row['name'] . "|" . $row['sold'] . "|" .$row['rooms'] . "|";
    $str .= $row['bathrooms'] . "|" . $row['price'] . "|" . $row['distancia'] . "|" . $row['google'] . "|" .  $row['city'] . "|";
    $str .= $row['state'] . "|" . $row["country"];
    array_push($array, $str);
  }
}

// foreach ($array as &$valor) {
//   echo $valor;
// }

$_SESSION['resultado'] = $array;
header("Location: ../views/busqueda.php");

 ?>
