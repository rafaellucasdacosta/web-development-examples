<html lang="pt">
<head>
   <title>Mini Twitter</title>
   <link rel="stylesheet" href="css/style.css" />
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
   <link rel="icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
   <main>
   <header id="page-header">
      <div id="logo">
         <img src="image/logo.png" />
         <span class="remark0">Mini</span><span class="remark1">Twitt</span><span class="remark2">er</span>
      </div>
      <nav id="menu">home | trending | profile</nav>
   </header>
   <section id="login-panel">
      <header><h1>Criar uma nova conta</h1></header>
      <form method="post">
         <input type="text" id="txtNome" name="name" size="50" placeholder="seu nome" required="true"/><br />
         <input type="text" id="txtUsername" name="username" size="50" placeholder="seu nome de usuário"  required="true"/><br />
         <input type="email" id="txtEmail" name="email" size="50" placeholder="seu e-mail" required="true"/><br />
         <input type="password" id="txtSenha" name="password" size="50" placeholder="sua senha" required="true"/><br />
         <input type="password" id="txtConfirmaSenha" name="confirmation" size="50" placeholder="confirme sua senha" required="true"/><br />
         <footer>
            <input type="submit" value="Enviar" class="button send"/>
            <input type="reset" value="Limpar" class="button"/>
         </footer>
      </form>
   </section>
   </main>
</body>
</html>
