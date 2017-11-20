<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo" style="color:white"><b>DELTA</b></h1>
    <h1 class="w3-xxxlarge w3-text-white"><b>O futuro é brilhante</b></h1>
</div>
<div class="w3-content w3-section" style="max-width:100%">
  <img class="mySlides" src="img/seg.png" style="width:100%">
  <img class="mySlides" src="img/ter.png" style="width:100%">
  <img class="mySlides" src="img/qua.png" style="width:100%">
  <img class="mySlides" src="img/quinta.png" style="width:100%">
  <img class="mySlides" src="img/sexta.png" style="width:100%">
</div>
  
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1000); // Change image every 2 seconds
}
</script>