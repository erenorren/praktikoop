<?php
// index.php
$nama = "Peserta Praktik";
$waktu = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Website PHP di Hugging Face</title>
    <style>
      body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
      .container { max-width: 600px; margin: 0 auto; }
      .box { background: #f0f8ff; padding: 20px; border-radius: 10px; margin-top: 20px; }
    </style>
</head>
    
<body>
  <div class="container">
    <h1>Selamat Datang di Website PHP!</h1>
    <p>Halo <strong><?= htmlspecialchars($nama) ?></strong></p>
  <div class="box">
    <p>Waktu server: <code><?= $waktu ?></code></p>
    <p>Dijalankan di <strong>Docker</strong> di Hugging Face Spaces ✅</p>
  </div>
  </div>
  <?php echo '<p>Selamat datang dipraktikum PBO semester 3: Sheren</p>'; ?> 
    <a href="home.php">Go To Home</a>
</body>
</html>
