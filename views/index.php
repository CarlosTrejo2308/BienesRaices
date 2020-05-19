<?php
  include_once '../models/dbh.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Bienes Raices</title>
  </head>
  <body>
    <h1>Prueba</h1>

    <?php
      $sql = "select * from usuarios;";
      $result = mysqli_query($conn, $sql);

      $resultCheck = mysqli_num_rows($result);

      if ( $resultCheck > 0 ) {
        while ( $row = mysqli_fetch_assoc( $result ) ) {
          echo $row['name'];
        }
      }
    ?>

  </body>
</html>
