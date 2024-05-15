<?php
    // Di file submit_form.php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $origin = isset($_POST['origin']) ? $_POST['origin'] : '';
        $whatsapp = isset($_POST['whatsapp']) ? $_POST['whatsapp'] : '';

        // Jika file tidak ada, arahkan ke page/error.php
        if ($whatsapp == "Pesan melalui WhatsApp") {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $telepon = $_POST['telepon'];
            $jenis = $_POST['jenis'];
            $paket = $_POST['paket'];
            $kupon = $_POST['kupon'];

            $pesan = "Saya ingin melakukan Pemesanan Layanan:\n\nNama: $nama\nEmail: $email\nTelepon: $telepon\nJenis Layanan: $jenis\nPaket: $paket\nKode Kupon: $kupon";
            $pesan = urlencode($pesan);

            header("Location: https://api.whatsapp.com/send?phone=6282279425257&text=$pesan");
        }
        else if (!file_exists('submit_form.php') && $origin == "contact.php") {
            http_response_code(404);
            $_GET['error_file'] = "submit_form.php";  // menyimpan nama file ke variabel $_GET
            $_GET['error_image'] = "../gambar/404.jpg";
            include "error.php";
        } 
        else if (!file_exists('proses_pemesanan.php') && $origin == "pesan.php") {
            http_response_code(404);
            $_GET['error_file'] = "proses_pemesanan.php";  // menyimpan nama file ke variabel $_GET
            $_GET['error_image'] = "../gambar/404.jpg";
            include "error.php";
        } else if (file_exists('proses_pemesanan.php') && $origin == "pesan.php") {
            // Jika file ada, meneruskan data POST
            include 'proses_pemesanan.php';
        } else if (file_exists('submit_form.php') && $origin == "contact.php") {
            // Jika file ada, meneruskan data POST
            include 'submit_form.php';
        } else if (!file_exists('../dashboard/index.php')) {
            http_response_code(404);
            $_GET['error_file'] = "../dashboard/index.php";  // menyimpan nama file ke variabel $_GET
            $_GET['error_image'] = "../gambar/404.jpg";
            include "error.php";
        } else if (file_exists('../dashboard/index.php')) {
            // Jika file ada, meneruskan data POST
            include '../dashboard/index.php';
        } 
    }
?>
