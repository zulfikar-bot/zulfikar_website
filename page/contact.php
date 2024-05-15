<!DOCTYPE html>
<html>
<head>
    <title>Kontak Kami - Jasa Pembuatan Website dan Aplikasi Android</title>
</head>
<body>
    <style>
        form {
    border: 1px solid #ccc;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  input[type="text"], input[type="email"], textarea {
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
    <h1>Kontak Kami</h1>
    <p>Jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut tentang layanan kami, silakan hubungi kami melalui formulir kontak di bawah ini:</p>
    
    <form action="page/checked.php" method="post">
      <label for="name">Nama:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="message">Pesan:</label><br>
      <textarea id="message" name="message"></textarea><br>
      <input type="submit" value="Kirim">
      <input type="hidden" name="origin" value="contact.php">
    </form>

    
    <p>Atau, Anda juga bisa menghubungi kami melalui email atau telepon:</p>
    <ul>
        <li>
            <a href="mailto:mzulganteng6@gmail.com">Email Kami</a>
        </li>
        <li>
            <a href="tel:+6282279425257">Telpon Kami</a>
        </li>
    </ul>
</body>
</html>
