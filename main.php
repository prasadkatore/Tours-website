<!DOCTYPE html>
<html>
<head>
 
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}


/* Style the header */
.header {
    background-color: #f1f1f1;
 
	 
    padding: 340px;
     
}

 
 

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 16px 30px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}







* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1100px;
  position: relative;
  margin: auto;
}

 

 

/* Style the footer */
.footer {
    background-color: #f1f1f1;
    padding: 10px;
    text-align: center;
}





ul {
    list-style-type: none;
    margin: 0;
    padding: 10;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 24px 696px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

 <div class="topnav">
  <a href="main.html">Home</a>
  <a href="packages.html">Packages</a>
  <a href="#">Blogs</a>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
   
  <img src="1.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="2.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="3.jpg" style="width:100%">
 
</div>

</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
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

<ul>
  <li><a class="active" href="reservation.php">Book your package</a></li>
 
</ul>



 

<div class="footer">
  <p>Contact US-7775829346</p>
</div>
</body>
</html> 
