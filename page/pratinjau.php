<!DOCTYPE html>
<html>
<head>
    <style>
        * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  width: 320px;
  height: 270px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

.mySlides img {
    width: 300px;
    height: 250px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: 200px;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  background-color: black;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  background-color: black;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
    </style>
</head>
<body>
    <section class='sections'>
    <center> <h2 class='h2s'>Pratinjau</h2> </center>";
    <!-- Slideshow container -->
    <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <?php
        for ($i = 1; $i <= 22; $i++) {
            echo "<div class='mySlides fade'>";
            echo "<div class='numbertext'>$i / 22</div>";
            echo "<img src='gambar/$i.png' style='width:100%'>";
            echo "<div class='text'>Caption $i</div>";
            echo "</div>";
        }
        ?>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <?php
    for ($i = 1; $i <= 22; $i++) {
        echo "<span class='dot' onclick='currentSlide($i)'></span> ";
    }
    ?>
</div>


<script>
    var slideIndex = 1;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    var slideInterval;

    function showSlides(n) {
        var i;
        if (n > slides.length) {slideIndex = 1}
        else if (n < 1) {slideIndex = slides.length}
        else {slideIndex = n;}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }

    function plusSlides(n) {
        stopAutoSlides();
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        stopAutoSlides();
        showSlides(slideIndex = n);
    }

    function autoSlides() {
        stopAutoSlides(); // Stop any ongoing interval
        slideInterval = setInterval(function() {
            plusSlides(1);
        }, 7000); // Ubah gambar setiap 7 detik
    }

    function stopAutoSlides() {
        clearInterval(slideInterval);
    }

    autoSlides(); // Start the slideshow automatically initially
    </script>
</body>
</html>
