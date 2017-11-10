<!DOCTYPE html>
<html>
<title>Contato</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer;width:100%}
.w3-half img:hover{opacity:1}
.img_logo{
            text-align:center;
            width:100%;
 }
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-light-blue w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#363636;i"mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <img src="img/delta1.png" style="width:75%;height:75%;div-align:center">
  </div>
  <div class="w3-bar-block">
    <a href="index.php"  class="w3-bar-item w3-button w3-hover-white">HOME</a> 
    <a href="nos.php"  class="w3-bar-item w3-button w3-hover-white">SOBRE NÓS</a> 
    <a href="produto.php"  class="w3-bar-item w3-button w3-hover-white">PRODUTO E SERVIÇOS</a> 
    <a href="contato.php"  class="w3-bar-item w3-button w3-hover-white">FALE CONOSCO</a> 
    <a href="responsabilidade.php"  class="w3-bar-item w3-button w3-hover-white">RESPONSABILIDADE SOCIAL</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>MENU DELTA</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="img_logo">
        <img src="img/contato.png" alt="Contato" style="margin-top:30px;width:400px;border-radius:10px">
    </div>
  </div>

  <!-- Contato -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contato</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p></p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Nome</label>
        <input class="w3-input w3-border" type="text" name="Nome" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Comentário</label>
        <input class="w3-input w3-border" type="text" name="Comentário" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar informações</button>
    </form>  
  </div>
  <!-- Trabalhe Conosco -->
  <div class="w3-container" id="trabalhe" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Trabalhe Conosco</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p></p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Nome Completo</label>
        <input class="w3-input w3-border" type="text" name="Nome" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Telefone</label>
        <input class="w3-input w3-border" type="text" name="Telefone" required>
      </div>
      <div class="w3-section">
        <label>Data de nascimento</label>
        <input class="w3-input w3-border" type="text" name="Nascimento" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Enviar informações</button>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Equipe DELTA - Todos os direitos reservados</a></p></div>

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
