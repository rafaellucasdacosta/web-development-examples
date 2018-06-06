<html lang="pt">
<head>
   <title>Mini Twitter</title>
   <link rel="stylesheet" href="css/style.css" />
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
   <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
   <main>
   <?php include("header.php"); ?>
   <?php
      $name = $_GET['name'];
      $username = $_GET['username'];
      $email = $_GET['email'];
    ?>
   <section id="login-panel">
      <header><h1>Criar uma nova conta</h1></header>
      <form method="post" action="process_new.php">
         <input type="text" id="txtNome" name="name" value="<?=$name?>" size="50" placeholder="seu nome" required="true"/><br />
         <input type="text" id="txtUsername" name="username" value="<?=$username?>" size="50" placeholder="seu nome de usuário"  required="true"/><br />
         <input type="email" id="txtEmail" name="email" value="<?=$email?>" size="50" placeholder="seu e-mail" required="true"/><br />
         <input type="password" id="txtSenha" name="password" size="50" placeholder="sua senha" required="true"/><br />
         <input type="password" id="txtConfirmaSenha" name="confirmation" size="50" placeholder="confirme sua senha" required="true"/><br />
         <footer>
            <input type="submit" value="Enviar" class="button send"/>
            <input type="reset" value="Limpar" class="button"/>
         </footer>
      </form>
      <?php
         session_start();
         if (isset($_SESSION['error'])) {
            $e = $_SESSION['error'];
            echo "<h1 class='error'>$e</h1>";
            unset($_SESSION['error']);
         }
      ?>
   </section>
   <?php include("footer.php"); ?>
   </main>
</body>
</html>
