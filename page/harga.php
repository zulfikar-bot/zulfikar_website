<!DOCTYPE html>
<html>
<head>
<title>Jasa Pembuatan Website dan Aplikasi Android</title>
</head>
<body class="bodys">
<script>
    window.addEventListener('load', function() {
    var sliders = document.querySelectorAll('.slide-container');
    sliders.forEach(function(slider) {
        var slide = slider.querySelector('.slide');
        var kupon = slide.querySelectorAll('.kupon');
        var index = 0;

        function updateSlide() {
            slide.style.transform = 'translateX(' + (-index * 270) + 'px)'; /* Perpindahan slide disesuaikan dengan lebar container */
        }

        // Slide otomatis setiap 7 detik
        setInterval(function() {
            index = (index + 1) % kupon.length;
            updateSlide();
        }, 7000);

        // Navigasi slide
        slider.querySelector('.prev').addEventListener('click', function() {
            index = (index - 1 + kupon.length) % kupon.length;
            updateSlide();
        });
        slider.querySelector('.next').addEventListener('click', function() {
            index = (index + 1) % kupon.length;
            updateSlide();
        });
    });
});
</script>
<style>
    .slide-container {
    position: relative;
    width: 270px; /* Lebar container disesuaikan dengan lebar kupon */
    height: 170px;
    margin: auto;
    overflow: hidden;
}

.slide {
    display: flex;
    width: max-content;
    transition: transform 0.5s ease-in-out;
}

.kupon {
    width: 250px;
    height: 150px;
    padding: 20px;
    margin: 10px;
    border-radius: 15px; /* Border radius disesuaikan */
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    color: #333;
    background: linear-gradient(to right, #ff9966 0%, #ff5e62 100%);
    text-align: center;
}

.harga {
    font-size: 18px;
    color: #fff;
    word-wrap: break-word;
}

.nav {
    position: absolute;
    top: 40%;
    width: 30px;
    height: 30px;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
}

.nav:hover {
    background-color: rgba(255, 255, 255, 0.9);
}

.prev {
    left: 10px;
}

.next {
    right: 10px;
}
</style>
<?php
// Daftar paket layanan
$paket = array(
    "website" => array(
        "Basic" => 5000000,
        "Premium" => 10000000,
        "Ultimate" => 15000000
    ),
    "android" => array(
        "Basic" => 7000000,
        "Premium" => 12000000,
        "Ultimate" => 17000000
    )
);

// Fungsi untuk menampilkan paket dan harga
function tampilkanPaket($jenis, $paket) {
    echo "<section class='sections'>";
    echo "<center> <h2 class='h2s'>Paket $jenis</h2> </center>";
    echo "<div class='slide-container'>";
    echo "<div class='slide'>";
    foreach ($paket as $nama => $harga) {
        echo "<div class='kupon'>";
        echo "<h3 class='h3s'>$nama</h3>";
        echo "<p class='harga ps'>Harga: Rp " . number_format($harga, 2, ',', '.') . "</p>";
        echo "</div>";
    }
    echo "</div>";
    echo "<div class='nav prev'><</div>";
    echo "<div class='nav next'>></div>";
    echo "</div>";
    echo "</section><br>";
}

// Tampilkan paket website
tampilkanPaket("Website", $paket["website"]);

// Tampilkan paket aplikasi Android
tampilkanPaket("Aplikasi Android", $paket["android"]);
?>
</body>
</html>
