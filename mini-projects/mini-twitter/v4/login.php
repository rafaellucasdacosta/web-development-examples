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
   <section id="login-panel">
      <header><h1>Identifique-se</h1></header>
      <form method="post">
         <input type="text" id="txtLogin" name="name" size="50" placeholder="seu nome de usuário"/><br />
         <input type="password" id="txtSenha" name="password" size="50" placeholder="sua senha"/><br />
         <footer>
            <input type="submit" value="Enviar" class="button send"/>
            <input type="reset" value="Limpar" class="button"/>
         </footer>
      </form>
   </section>
      <?php include("footer.php"); ?>
   </main>
</body>
</html>
