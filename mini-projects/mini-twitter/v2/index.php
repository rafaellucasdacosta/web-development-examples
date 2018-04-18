<?php
   $conn = new mysqli("localhost", "mini-twitter", "1234", "mini-twitter");
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $name = $_POST["name"];
   $msg = $_POST["msg"];
   if (isset($name) && isset($msg)){
      $stmt = $conn->prepare("INSERT INTO twitts (owner, message) VALUES (?, ?)");
      $stmt->bind_param("ss", $name, $msg);
      $stmt->execute();
   }
?>
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
      <img src="image/logo.png" /> <br/>
      <span class="remark0">Mini</span><span class="remark1">Twitt</span><span class="remark2">er</span>
   </header>
   <nav>home | trending | profile</nav>
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

      <?php
         $sql = "SELECT id, date, owner, message FROM twitts order by date desc";
         $result = $conn->query($sql) or die($conn->error);
         while($row = $result->fetch_assoc()) {
           echo "<article class='one-twitt'>\n";
           echo "<header><span class='user'>".$row["owner"]."</span> . ". $row["date"]."</header>\n";
           echo "<p>" . $row["message"]. "</p>\n";
           echo "</article>\n";
         }
         $conn->close();
      ?>

   </section>
   <footer></footer>
   </main>
</body>
</html>
