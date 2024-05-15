<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "main";

switch ($page) {
    case 'home':
        $file = "page/home.html";
        break;
    case 'website':
        $file = "page/website.html";
        break;
    case 'about':
        $file = "page/about.html";
        break;
    case 'pratinjau':
        $file = "page/pratinjau.php";
        break;
    case 'contact':
        $file = "page/contact.php";
        break;
    case 'main':
        $file = "page/home.html";
        break;
    case 'harga':
        $file = "page/harga.php";
        break;
    case 'android':
        $file = "page/android.html";
        break;
    case 'pesan':
        $file = "page/pesan.php";
        break;
    default:
        $file = "page/error.php";
        break;
}

if (file_exists($file)) {
    include $file;
} else {
    http_response_code(404);
    $_GET['error_file'] = $file;  // menyimpan nama file ke variabel $_GET
    $_GET['error_image'] = "gambar/404.jpg";
    include "page/error.php";
}
?>
