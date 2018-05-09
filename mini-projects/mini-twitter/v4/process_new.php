<?php
   require_once('data.php');
   $name = $_POST['name'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmation = $_POST['confirmation'];

   if (!strcmp($confirmation)){
      header("Location: new.php");
   }

   //validar senha e confirmação
   $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
   $stmt->bind_param("ssss", $name, $username, $email, $password );
   if ($stmt->execute()){
      header("Location: index.php");
   } else {
      header("Location: new.php");
   }
?>
