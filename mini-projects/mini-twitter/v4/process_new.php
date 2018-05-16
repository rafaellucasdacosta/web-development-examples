<?php
   require_once('data.php');
   $name = $_POST['name'];
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmation = $_POST['confirmation'];

   if (strcmp($confirmation, $password)!=0){
      session_start();
      $_SESSION['error'] = "a senha e a confirmação devem ser iguais";
      $_SESSION['name'] = $name;
      header("Location: new.php");
   } else {
      //validar senha e confirmação
      $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) VALUES (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $name, $username, $email, $password );
      if ($stmt->execute()){
         header("Location: index.php");
      } else {
         session_start();
         $_SESSION['error'] = "erro no banco de dados";
         header("Location: new.php");
      }
   }
?>
