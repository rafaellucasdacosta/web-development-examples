<?php
   require_once('data.php');
   $username = $_POST['username'];
   $password = $_POST['password'];
   //validar senha e confirmação
   $query = "select username, name, password from users where username = '$username' ";
   if ($result = $conn->query($query)) {
      if ($row = $result->fetch_object()){
         if (strcmp($row.password, $password)){
            //ok
            header("Location: tweets.php");
         }
      } else {
         //usuario inválido
      }
   } else {
      //$mysqli->error
   }
   header("Location: login.php");
?>
