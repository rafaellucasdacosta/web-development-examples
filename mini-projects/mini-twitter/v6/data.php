<?php
  $db_host = "localhost";
  $db_login = "mini-twitter2";
  $db_password = "123";
  $db_db = "mini-twitter2";

  $conn = new mysqli($db_host, $db_login, $db_password, $db_db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 ?>
