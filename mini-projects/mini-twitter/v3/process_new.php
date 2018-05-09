<?php
   require_once('data.php');
   $name = $_POST['name'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmation = $_POST['confirmation'];
   //validar senha e confirmação
   $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
   $stmt->bind_param("ssss", $name, $username, $email, $password );
   $stmt->execute();
   //validar possiveis erros do banco

   header("Location: index.php");
//   header("Location: new.php");
?>
