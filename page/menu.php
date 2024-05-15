<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "main";
?>

<html>
<head>
<title>Jasa Pembuatan Website dan Aplikasi Android</title>
</head>
<body>
<a href="index.php?page=home" class="<?php echo ($page == 'home') ? 'active' : ''; ?>">Beranda</a>

<div class="dropdown" id="dropdown">
    <button class="dropbtn <?php echo (in_array($page, ['website', 'android', 'harga', 'pratinjau', 'contact', 'about'])) ? 'active' : ''; ?>">Layanan <i class="fa fa-caret-down"></i></button>
    <div id="myDropdown" class="dropdown-content" style="position: absolute;">
        <a href="index.php?page=website" class="<?php echo ($page == 'website') ? 'active' : ''; ?>">Website</a><br>
        <a href="index.php?page=android" class="<?php echo ($page == 'android') ? 'active' : ''; ?>">Android</a><br>
        <a href="index.php?page=harga" class="<?php echo ($page == 'harga') ? 'active' : ''; ?>">Harga</a><br>
        <a href="index.php?page=pratinjau" class="<?php echo ($page == 'pratinjau') ? 'active' : ''; ?>">Pratinjau Tampilan Layanan</a><br>
        <a href="index.php?page=contact" class="<?php echo ($page == 'contact') ? 'active' : ''; ?>">Kontak Kami</a> 
        <a href="index.php?page=about" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">Tentang Kami</a><br>
        <a href="#login" onclick="document.getElementById('id01').style.display='block'">Login</a>
    </div>
</div>
<a href="index.php?page=pesan" class="<?php echo ($page == 'pesan') ? 'active' : ''; ?>">Pesan Sekarang!</a>
</body>
</html>
