<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
<style>
* {box-sizing: border-box;
padding:0;
margin:0;
}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;

}
img {vertical-align: middle;max-height:500px!important;
}
.nav{
    float:right;
}
.brand-Name{
    font-weight:6px;
}
.brand-Name a:hover{
background-color:transparent!important;
color:#fff!important;
}
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="topnav" id="myTopnav">
<h2 class="brand-Name"> <a href="#"> Exam paper  repository</a></h2>
  <div class="nav">
  <a href="#home" class="active">Home</a>
  <a href="#about">About</a>
  <a href="homepage.php">Search Paper </a>
  <a href="login.php">logIn</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  </div>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/img (1).jpeg" style="width:100%">
  <div class="text">t</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/img.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/img (7).jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

  <div class="row mt-5 container mb-5" style="margin:0px auto;">
    <div class="col" style="text-align:center;">
    <h4> Manage Subjects Type </h4>
    <img src="img/img (5).jpg" alt="" style="width:100%" srcset="">
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     At quaerat labore sed eius rerum earum dolore praesentium, 
    vitae nulla iste dolorum asperiores atque qui natus omnis recusandae? Quae, 
    facilis amet.</p>
    </div>
    <div class="col" style="text-align:center;">  <h4> Manage Faculty and Roles </h4>
    <img src="img/img (2).jpeg" alt="" style="width:100%" srcset="">
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     At quaerat labore sed eius rerum earum dolore praesentium, 
    vitae nulla iste dolorum asperiores atque qui natus omnis recusandae? Quae, 
    facilis amet.</p>
    </div>
    <div class="col" style="text-align:center;">
    <h4> Manage PDF Past Question </h4>
    <img src="img/img (1).jpeg" alt="" style="width:100%" srcset="">
    <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
     At quaerat labore sed eius rerum earum dolore praesentium, 
    vitae nulla iste dolorum asperiores atque qui natus omnis recusandae? Quae, 
    facilis amet.</p>
    </div>
  </div>
</div>
<div class="container text-center">
<h4>Welcome to Exam Past Question Paper Repository System</h4>
<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Natus amet possimus, vel fugit quod autem eum
 labore vero id ex cupiditate adipisci ipsam.
  Iste esse fugiat eum rem ducimus quod!</p>
</div>
<div class="bg-dark text-center text-white" style="background-color:#222;">
copyright  &copy; 2022
</div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
} 
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
