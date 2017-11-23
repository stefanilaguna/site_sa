
<div class="w3-content w3-display-container" style="margin-top:0px;max-width:80%">
    <img class="mySlides" src="img/01.png" style="width:100%">
    <img class="mySlides" src="img/02.png" style="width:100%">
    <img class="mySlides" src="img/03.png" style="width:100%">
    <img class="mySlides" src="img/04.png" style="width:100%">
    <img class="mySlides" src="img/05.png" style="width:100%">
    <img class="mySlides" src="img/06.png" style="width:100%">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(5)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(6)"></span>
    </div>
</div>
<div class="w3-container">
    <h1 class="w3-xxxlarge w3-text-white" style="margin-top:80px"><b>Produtos</b></h1>
    <h2>Produtos</h2>
</div>
<!--dinamico-->
<div class="w3-card-4" style="width:30%;text-align:center;background-color:white;border:5px solid black">
    <img src="img/001.jpg" alt="Norway" style="width:50%;text-align:center">
    <div class="w3-container w3-center" style="color:black">
        <h6>MONITOR GAMER LG 25UM58-P</h6>
        <p>LED 24 POL FULL HD 1MS 144HZ FREESYNC VGA /DVI/DISPLAY PORT/HDMI</p>
        <p>R$750,00</p>
    </div>
</div>
<!--dinamico-->
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function currentDiv(n) {
        showDivs(slideIndex = n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " w3-white";
    }
</script>
