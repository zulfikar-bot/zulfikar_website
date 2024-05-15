<!DOCTYPE html>
<html>
<head><title>Jasa Pembuatan Website dan Aplikasi Android</title>
<link rel="stylesheet" type="text/css" href="css/tampilan.css"> 
<link rel="stylesheet" type="text/css" href="css/content.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header">
    <?php 
    $file = "page/header.html";
    if (file_exists($file)) {
        include $file;
    } else {
        http_response_code(404);
        $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
        $_GET['error_image'] = "gambar/404.jpg";
        include "page/error.php";
    }
    ?>
</div>
<div id="navbar">
    <?php 
    $file = "page/menu.php";
    if (file_exists($file)) {
        include $file;
    } else {
        http_response_code(404);
        $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
        $_GET['error_image'] = "gambar/404.jpg";
        include "page/error.php";
    }
    ?>
</div>
<div class="row">
    <div id="running">
    <?php 
    $file = "page/runningteks.html";
    if (file_exists($file)) {
        include $file;
    } else {
        http_response_code(404);
        $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
        $_GET['error_image'] = "gambar/404.jpg";
        include "page/error.php";
    }
    ?>
    </div>
    <div class="leftcolumn">
        <div class="card">
            <?php 
            $file = "page/paging.php";
            if (file_exists($file)) {
                include $file;
            } else {
                http_response_code(404);
                $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
                $_GET['error_image'] = "gambar/404.jpg";
                include "page/error.php";
            }
            ?>
        </div> 
    </div>
    <div class="rightcolumn">
        <div class="card">
        <?php 
            $file = "page/about.html";
            if (file_exists($file)) {
                $html = file_get_contents($file);
                $dom = new DOMDocument;
                @$dom->loadHTML($html);
                $xpath = new DOMXPath($dom);
                $about = $xpath->query("//*[@id='about']");

                if ($about->length > 0) {
                    echo $dom->saveHTML($about->item(0));
                } else {
                    http_response_code(404);
                    $_GET['error_file'] = "Element dengan id 'about' tidak ditemukan.";  // menyimpan error ke variabel $_GET
                    $_GET['error_image'] = "gambar/404.jpg";
                    include "page/error.php";
                }
            } else {
                http_response_code(404);
                $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
                $_GET['error_image'] = "gambar/404.jpg";
                include "page/error.php";
            }
        ?>
        </div> 
        <div class="card">
            <?php 
            $file = "page/lokasi.html";
            if (file_exists($file)) {
                include $file;
            } else {
                http_response_code(404);
                $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
                $_GET['error_image'] = "gambar/404.jpg";
                include "page/error.php";
            }
            ?>
        </div> 
        <div class="card">
            <?php 
            $file = "page/socialmedia.html";
            if (file_exists($file)) {
                include $file;
            } else {
                http_response_code(404);
                $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
                $_GET['error_image'] = "gambar/404.jpg";
                include "page/error.php";
            }
            ?>
        </div>
    </div>
</div><br><br><br><br>
<?php include "page/login.html"?>
<?php 
    $file = "page/whatsapp.html";
    if (file_exists($file)) {
        include $file;
    } else {
        http_response_code(404);
        $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
        $_GET['error_image'] = "gambar/404.jpg";
        include "page/error.php";
    }
    ?>
<div class="footer">
    <?php 
    $file = "page/footer.php";
    if (file_exists($file)) {
        include $file;
    } else {
        http_response_code(404);
        $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
        $_GET['error_image'] = "gambar/404.jpg";
        include "page/error.php";
    }
    ?>
</div> <script src="js/aksi.js"></script>
</body>
</html>