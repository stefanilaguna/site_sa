<!DOCTYPE html>
<html>
    <title>Sobre Nós</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}
        .img_logo{
            text-align:center;
            width:100%
        }
    </style>
    <body>

        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-white w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold"mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <img src="img/delta1.png" style="width:75%;height:75%;div-align:center">
            </div>
            <div class="w3-bar-block">
                <img scr="img/delta1.png">
                <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">HOME</a> 
                <a href="sobre.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">SOBRE NÓS</a> 
                <a href="produto.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">PRODUTO E SERVIÇOS</a> 
                <a href="contato.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">FALE CONOSCO</a> 
                <a href="responsabilidade.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-black">RESPONSABILIDADE SOCIAL</a>

            </div>
        </nav>

        <!-- Top menu on small screens -->
        <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding">
            <a href="javascript:void(0)" class="w3-button w3-white w3-margin-right" onclick="w3_open()">☰</a>
            <span>MENU DELTA</span>
        </header>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:340px;margin-right:40px">
            <div class="w3-container" id="services" 
                 >
                <h1 class="w3-xxxlarge w3-text-white"><b>Sobre Nós</b></h1>
                <p style="color:white">A DELTA é uma empresa que atua no ramo da informática e está há mais de 10 anos no mercado de trabalho e atende as regiões do Alto Vale do Itajaí - Santa Catarina. Atualmente contamos  com uma equipe de 80 funcionários especializados e materiais de alto desempenho e durabilidade, visando assim a satisfação de todos nossos clientes e fornecedores. </p>
            </div>
            <div class="w3-container" id="programa" style="margin-top:40px;color:white">
                <h1 class="w3-xxxlarge w3-text-white"><b>Localização</b></h1>
                <p>Nossa matriz está situada na cidade de Rio do Sul e conta com mais 4 filiais, sendo elas nas cidades de: Agrolândia, Dona Emma, Ituporanga e Salete.
                </p>
            </div>
            <div class="responsive">
                <div class="galeria">
                    <img src="img/5.png" alt="1">
                    <div class="desc">Matriz - Rio do Sul</div>
                </div>
                <div class="galeria">
                    <img src="img/1.png" alt="2">
                    <div class="desc">Filial 01 - Agrolândia</div>
                </div>
                <div class="galeria">
                    <img src="img/3.png" alt="3">
                    <div class="desc">Filial 02 - Dona Emma</div>
                </div>
                <div class="galeria">
                    <img src="img/4.png" alt="4">
                    <div>   
                        <div class="desc">Filial 03 - Ituporanga</div>
                    </div>
                </div>
                <div class="galeria">
                    <img src="img/2.png" alt="5">
                    <div class="desc">Filial 04 - Salete</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- W3.CSS Container -->
            <div class="w3-white w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Equipe DELTA - Todos os direitos reservados</a></p></div>
        </div>
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




