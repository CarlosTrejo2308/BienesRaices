<?php
include_once '../models/dbh.php';

$name = $_POST['inombre'];
$last_name = $_POST['ipaterno'];
$bday = $_POST['inacimiento'];
$email = $_POST['iemail'];
$pwd = $_POST['ipasswd'];


$sql = "INSERT INTO usuarios (name, lastName, birth, email, passwd) VALUES ( '$name', '$last_name', '$bday', '$email', '$pwd' )";
$respu = mysqli_query($conn, $sql);


if ( $respu == 1 )  {
  header("Location: ../views/registro.php?signup=success");
}
else {
  header("Location: ../views/registro.php?signup=fail");
}

 ?>
