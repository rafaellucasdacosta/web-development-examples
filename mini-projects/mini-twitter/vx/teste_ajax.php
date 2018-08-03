<html lang="pt">
<head>
   <title>Mini Twitter</title>
   <link rel="stylesheet" href="css/style.css" />
   <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"/>
   <link rel="icon" href="favicon.ico" type="image/x-icon" />
   <script>
      function processarNome(nome){
         var nome = document.getElementById("nome").value;
         var xhr = new XMLHttpRequest();
         xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
               var resp = xhr.responseText;
               document.getElementById("resposta").innerText = resp;
            }
         }
         xhr.open("POST", "processa_ajax.php", true);
         xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
         xhr.send("nome="+nome+"&idade=18");
      }

      function processar(){
         setTimeout(processarTempo, 2000);
      }

      function processarTempo(){
         console.log("foi");
         var xhr = new XMLHttpRequest();
         xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
               document.getElementById("resposta").innerHTML = xhr.responseText;
            }
         }
         xhr.open("GET", "logic/html.php", true);
         xhr.send();
      }

   </script>
</head>
<body>
   <main>
   <?php include("header.php"); ?>
   <section id="intro">
      <input type="text" id="nome"  />
      <button onclick="processarNome()">Processar</button>
      <div id="resposta"></div>

      <button onclick="processarTempo()">Tempo</button>
   </section>
   <?php include("footer.php"); ?>
   </main>
</body>
</html>
