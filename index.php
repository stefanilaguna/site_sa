<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold"mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
     <img src="img/delta1.png" style="width:75%;height:75%;div-align:center">
  </div>
  <div class="w3-bar-block">
      <img scr="img/delta1.png">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">HOME</a> 
    <a href="nos.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">SOBRE NÓS</a> 
    <a href="produto.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">PRODUTO E SERVIÇOS</a> 
    <a href="contato.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">FALE CONOSCO</a>
    <a href="responsabilidade.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">RESPONSABILIDADE SOCIAL</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-light-blue w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-light-blue w3-margin-right" onclick="w3_open()">☰</a>
  <span>MENU DELTA</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main"  style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>DELTA</b></h1>
    <h1 class="w3-xxxlarge w3-text-light-blue"><b>O futuro é brilhante</b></h1>
    <hr style="width:50px;border:5px solid lightblueblue" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="/w3images/kitchenconcrete.jpg" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <img src="/w3images/livingroom.jpg" style="width:100%" onclick="onClick(this)" alt="Light, white and tight scandinavian design">
      <img src="/w3images/diningroom.jpg" style="width:100%" onclick="onClick(this)" alt="White walls with designer chairs">
    </div>

    <div class="w3-half">
      <img src="/w3images/atrium.jpg" style="width:100%" onclick="onClick(this)" alt="Windows for the atrium">
      <img src="/w3images/bedroom.jpg" style="width:100%" onclick="onClick(this)" alt="Bedroom and office in one space">
      <img src="/w3images/livingroom2.jpg" style="width:100%" onclick="onClick(this)" alt="Scandinavian design">
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-light-blue"><b>Sobre Nós</b></h1>
    <hr style="width:50px;border:5px solid lightblue" class="w3-round">
    <p>A DELTA é uma empresa que atua no ramo da informática e está há mais de 10 anos no mercado de trabalho e atende as regiões do Alto Vale do Itajaí - Santa Catarina. Atualmente contamos  com uma equipe de 80 funcionários especializados e materiais de alto desempenho e durabilidade, visando assim a satisfação de todos nossos clientes. </p>
    <p>Nossa matriz está situada na cidade de Rio do Sul e conta com mais 4 filiais, sendo elas nas cidades de : Agrolândia, Dona Emma, Ituporanga e Salete</p>
  </div>
  
 

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
