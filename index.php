<!DOCTYPE html>
<html>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}
    </style>
    <body>
        <a href="../../../Users/karine_d/AppData/Local/Temp/SOBRE NÓS.URL"></a>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-white w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;text-align:center"mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <img src="img/delta1.png" style="width:75%;height:75%;div-align:center">
            </div>
            <div class="w3-bar-block">
                <img scr="img/delta1.png">
                <div class="menu">
                    <a href="?pg=home" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">HOME</a> 
                    <a href="?pg=sobre" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">SOBRE NÓS</a> 
                    <a href="?pg=produto" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">PRODUTOS</a> 
                    <a href="?pg=servicos" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">SERVIÇOS</a>
                    <a href="?pg=contato" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">FALE CONOSCO</a>
                    <a href="?pg=faq" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">PERGUNTAS FREQUENTES</a>
                    <a href="?pg=responsabilidade" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">RESPONSABILIDADE SOCIAL</a>
                </div>

            </div>
        </nav>

        <!-- Top menu on small screens -->
        <header class="w3-container w3-top w3-hide-large w3-withe w3-xlarge w3-padding">
            <a href="javascript:void(0)" class="w3-button w3-white w3-margin-right" onclick="w3_open()">☰</a>
            <span>MENU DELTA</span>
        </header>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main"  style="margin-left:340px;margin-right:40px">

            <?php
            @$pg = $_GET["pg"];
            if (!empty("$pg")) {
                include_once $pg . '.php';
            } else {
                include_once 'home.php';
            }
            ?> 
        </div>

        <!-- W3.CSS Container -->
        
       <div class="w3-white w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Equipe DELTA - Todos os direitos reservados</a></p></div>
       
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
