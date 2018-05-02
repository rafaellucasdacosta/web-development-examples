<?php
   $conn = new mysqli("localhost", "mini-twitter", "1234", "mini-twitter");
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
   }

   $name = $_POST["owner"];
   $msg = $_POST["message"];
   if (isset($name) && isset($msg)){
      $stmt = $conn->prepare("INSERT INTO twitts (owner, message) VALUES (?, ?)");
      $stmt->bind_param("ss", $name, $msg);
      $stmt->execute();
   }
?>
<html lang="pt">
<head>
   <title>Mini Twitter</title>
</head>
<body>
   <main>
   <header>Mini Twitter</header>
   <nav>*****</nav>
   <section>
      <header><h1>O que está acontecendo?</h1></header>
      <form method="post">
         <input type="text" id="txtName" name="owner" size="50"/><br />
         <textarea id="txtMsg" name="message" rows="5" cols="50"></textarea>
         <footer>
            <input type="submit" />
            <input type="reset" />
         </footer>
      </form>
   </section>
   <section>
      <header><h2>Veja o que seus amigos estão contando.</h2></header>
      <?php
         $sql = "SELECT id, date, owner, message FROM twitts order by date desc";
         $result = $conn->query($sql) or die($conn->error);
         while($row = $result->fetch_assoc()) {
           echo "<article>\n";
           echo "id: " . $row["id"]. "<br>\n";
           echo "date: " . $row["date"]. "<br>\n";
           echo "owner: " . $row["owner"]. "<br>\n";
           echo "message: " . $row["message"]. "<br>\n";
           echo "</article>\n";
         }
         $conn->close();
      ?>
   </section>
   <footer></footer>
   </main>
</body>
</html>
