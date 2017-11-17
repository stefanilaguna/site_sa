<!DOCTYPE html>
<html>
    <title>Contato</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/estilo.css">
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
        <nav class="w3-sidebar w3-white w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;background-color:#363636;i"mySidebar"><br>
            <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
            <div class="w3-container">
                <img src="img/delta1.png" style="width:75%;height:75%;div-align:center">
            </div>
            <div class="w3-bar-block">
                <a href="index.php"  class="w3-bar-item w3-button w3-hover-black">HOME</a> 
                <a href="sobre.php"  class="w3-bar-item w3-button w3-hover-black">SOBRE NÓS</a> 
                <a href="produto.php"  class="w3-bar-item w3-button w3-hover-black">PRODUTO E SERVIÇOS</a> 
                <a href="contato.php"  class="w3-bar-item w3-button w3-hover-black">FALE CONOSCO</a> 
                <a href="responsabilidade.php"  class="w3-bar-item w3-button w3-hover-black">RESPONSABILIDADE SOCIAL</a>
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


            <!-- Photo grid (modal) -->
            <div class="w3-row-padding">
                <div class="img_logo">
                    <img src="img/contato.png" alt="Contato" style="margin-top:50px;width:30%;border-radius:10px;height:30%">
                </div>
            </div>

            <!-- Contato -->
            <div class="w3-container" id="contact" style="margin-top:75px">
                <h1 class="w3-xxxlarge w3-text-white "><b>Contato</b></h1>
                <p></p>
                <form action="enviado.php" target="_blank">
                    <div class="w3-section">
                        <label>Nome</label>
                        <input class="w3-input w3-border" type="text" name="Nome" required>
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input w3-border" type="text" name="Email" required>
                    </div>
                    <div class="w3-section">
                        <label>Telefone</label>
                        <input class="w3-input w3-border" type="text" name="Email" required>
                    </div>
                    <div class="w3-section">
                        <form>
                            <select id="estado" name="estado">
                                <option value="estado">Estado</option>
                                <option value="ac">AC</option>
                                <option value="al">AL</option>
                                <option value="ap">AP</option>
                                <option value="am">AM</option>
                                <option value="ba">BA</option>
                                <option value="ce">CE</option>
                                <option value="df">DF</option>
                                <option value="es">ES</option>
                                <option value="go">GO</option>
                                <option value="ma">MA</option>
                                <option value="mt">MT</option>
                                <option value="ms">MS</option>
                                <option value="mg">MG</option>
                                <option value="pa">PA</option>
                                <option value="pb">PB</option>
                                <option value="pr">PR</option>
                                <option value="pe">PE</option>
                                <option value="pi">PI</option>
                                <option value="rj">RJ</option>
                                <option value="rn">RN</option>
                                <option value="rs">RS</option>
                                <option value="ro">RO</option>
                                <option value="rr">RR</option>
                                <option value="sc">SC</option>
                                <option value="sp">SP</option>
                                <option value="se">SE</option>
                                <option value="to">TO</option>
                            </select>
                        </form>
                    </div>
                    <div class="w3-section">
                        <label>Mensagem</label>
                        <input class="w3-input w3-border" type="text" name="Comentário" required>
                    </div>
                    <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Enviar informações</button>
                </form>  
            </div>
            <!-- Trabalhe Conosco -->
            <div class="w3-container" id="trabalhe" style="margin-top:75px">
                <h1 class="w3-xxxlarge w3-text-white"><b>Trabalhe Conosco</b></h1>
                <p></p>
                <form action="enviado.php" target="_blank">
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
                         <input type="text" name="fname" placeholder="Mensagem"><br>
                        <input class="w3-input w3-border" type="text" name="Nascimento" required>
                    </div>
                    <button type="submit" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Enviar informações</button>
                </form>  
            </div>

            <!-- End page content -->
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
