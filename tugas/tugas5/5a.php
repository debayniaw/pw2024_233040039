<?php
//Array Associative
// definisinya sama seperti arraynumerik, kecuali
// key-nya adalah strin yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Nadhil Ikhwan Ashshiba Waluya",
        "nrp" => "233040039",
        "email" => "nadhil@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nadhil.jpeg",
    ],
    [
        "nama" => "Mohammad Hilmy Yasirurrizqy",
        "nrp" => "233040047",
        "email" => "hilmy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hilmy.jpeg",
    ],
    [
        "nama" => "Ghani Aliyandi",
        "nrp" => "233040049",
        "email" => "ghani@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ghani.jpeg",
    ],
    [
        "nama" => "Ikhwan Azhary",
        "nrp" => "233040060",
        "email" => "ikhwan@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ikhwan.jpeg",
    ],
    [
        "nama" => "Najran Al-Faresy",
        "nrp" => "233040127",
        "email" => "najran@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "najran.jpeg",
    ],
    [
        "nama" => "Zaki Ramadhan Wijaya",
        "nrp" => "233040056",
        "email" => "zaki@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "zaki.jpeg",
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $mhs["nama"];?></li>
            <li>NRP: <?= $mhs["nrp"];?></li>
            <li>Email: <?= $mhs["email"];?></li>
            <li>Jurusan: <?= $mhs["jurusan"];?></li>
        </ul>
        <?php endforeach; ?>
</body>
</html>