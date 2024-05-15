<!DOCTYPE html>
<html>
<head>
<title>Form Pemesanan Jasa Pembuatan Website dan Aplikasi Android</title>
</head>
<body>
<style>
  form {
    border: 1px solid #ccc;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  input[type="text"], input[type="email"], input[type="tel"], textarea, select {
    width: 100%;
    padding: 10px;
    margin: 5px 0 10px 0;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }

  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>
<h2>Form Pemesanan</h2>
<form action="page/checked.php" method="post">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="telepon">Telepon:</label><br>
    <input type="tel" id="telepon" name="telepon"><br>
    <label for="jenis">Jenis Layanan:</label><br>
    <select id="jenis" name="jenis">
        <option value="Website">Website</option>
        <option value="Aplikasi Android">Aplikasi Android</option>
    </select><br>
    <label for="paket">Paket:</label><br>
    <select id="paket" name="paket">
        <option value="Basic">Basic</option>
        <option value="Premium">Premium</option>
        <option value="Ultimate">Ultimate</option>
    </select><br>
    <label for="kupon">Kode Kupon:</label><br>
    <input type="text" id="kupon" name="kupon"><br>
    <input type="submit" value="Pesan">
    <input type="submit" name="whatsapp" value="Pesan melalui WhatsApp">
    <input type="hidden" name="origin" value="pesan.php">
</form>
</body>
</html>
