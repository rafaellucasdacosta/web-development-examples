<?php
$conn = new mysqli("localhost", "mini-twitter2", "123", "mini-twitter2");
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

 ?>
