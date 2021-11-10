<!DOCTYPE html>
<html>

<head>
   <title>Contoh list dengan PHP</title>
</head>

<body>
   <h2>Daftar Absensi Mahasiswa</h2>
   <ol>
      <?php
      for ($i = 1; $i <= 1000; $i++) {
         echo "<li>Nama Mahasiswa ke-$i</li>";
      }
      ?>
   </ol>
   <p>Kalimat ini dibuat menggunakan HTML saja </p>
   <?php
   echo "<p>Kalimat ini dibuat menggunakan standar PHP tag</p>";
   ?>

   <?= "<p>Kalimat ini dibuat menggunakan mode PHP instan </p>"; ?>

   <?
   echo "<p>Kalimat ini dibuat menggunakan PHP Short tag </p>";
   ?>
</body>

</html>