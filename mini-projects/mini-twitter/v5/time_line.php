<?php require_once("check_user.php")?>
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
   <div>
      Olá <?php echo $auth_name; ?>
   </div>
   <section id="twitt-panel">
      <header><h1>O que está acontecendo?</h1></header>
      <form method="post">
         <input type="text" id="txtName" name="name" size="50" placeholder="seu nome de usuário"/><br />
         <textarea id="txtMsg" name="msg" rows="5" cols="50" placeholder="sua mensagem"></textarea>
         <footer>
            <input type="submit" value="Enviar" class="button send"/>
            <input type="reset" value="Limpar" class="button"/>
         </footer>
      </form>
   </section>




   <section id="twitts">
      <header><h1>Veja o que seus amigos estão contando.</h1></header>

   </section>
   <?php include("footer.php"); ?>
   </main>
</body>
</html>
