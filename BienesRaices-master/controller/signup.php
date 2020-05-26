<?php
  include_once '../models/dbh.php';

  $first = $_POST['first'];
  $last = $_POST['last'];
  $email = $_POST['email'];
  $pwd = $_POST['pwd'];


  $sql = "INSERT INTO usuarios ( name, lastName, email, passwd ) VALUES ( '$first', '$last', '$email', '$pwd' );";
  mysqli_query($conn, $sql);
  mysqli_close($conn);

  header("Location: ../views/index.php?signup=success");


/*
    <?php
      $sql = "select * from usuarios;";
      $result = mysqli_query($conn, $sql);


      /* SELECT
      $resultCheck = mysqli_num_rows($result);

      if ( $resultCheck > 0 ) {
        while ( $row = mysqli_fetch_assoc( $result ) ) {
          echo $row['name'] . "<br>";
        }
      }

      // Insert
      $sql = ""

    */
?>
