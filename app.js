var txt1 = document.getElementById("txt1");
var txt2 = document.getElementById("txt2");
var resultado = document.getElementById("resultado");

document.getElementById("somar").addEventListener("click", function(){
   var x = parseInt(txt1.value);
   var y = parseInt(txt2.value);
   var z = x+y;
   resultado.innerText = z;
   if (z > 1000){
      resultado.style.backgroundColor = "red";
   } else {
      resultado.style.backgroundColor = "blue";
   }
});
