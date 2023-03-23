<?php 

$mahasiswa = [
    [
        "nrp" => " 223040158 ",
        "nama" => " Muhamad Rafly Izudin Ahzami ",
        "email" => " rafly.223040158@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucing (1).jpg" 
    ],
    [
        "nrp" => " 223040162 ",
        "nama" => " Mahesa Rahdintyo Muhammad ",
        "email" => " mahesa.223040162@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucing1.jpg"
    ],
    [
        "nrp" => " 223040147 ",
        "nama" => " Galuh Wikri Ramadhan ",
        "email" => " galuh.223040147@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucing3.jpg"
    ],
    [
        "nrp" => " 223040164 ",
        "nama" => " Annisa Nursafitri ",
        "email" => " annisa.223040164@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucing5.jpg"
    ],
    [
        "nrp" => " 223040149 ",
        "nama" => " pebry adrian ",
        "email" => " pebry.223040149@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucing7.jpg"
    ],
    [
        "nrp" => " 223040156 ",
        "nama" => " Candra Nur Faritzi ",
        "email" => " candra.223040156@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucing9.jpg"
    ],
    [
        "nrp" => " 223040157 ",
        "nama" => " Muhammad Faiz Alhadziq naufal Athallah  ",
        "email" => " faiz.223040157@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucinge (1).jpg"
    ],
    [
        "nrp" => " 223040144 ",
        "nama" => " Ichka Sabila ",
        "email" => " ichka.223040144@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucinge (2).jpg"
    ],
    [
        "nrp" => " 223040159 ",
        "nama" => " Aditya Fauzan Salmannaufal ",
        "email" => " Aditya.223040159@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucinge (3).jpg"
    ],
    [
        "nrp" => " 223040160 ",
        "nama" => " Chandra Ardiansyah ",
        "email" => " chandra.223040160@mail.unpas.ac.id ",
        "jurusan" => " Teknik Informatika ",
        "gambar" => "kucinge (4).jpg"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li> <img src="img/<?= $mhs ["gambar"];?> "> </li>
            <li>Nama : <?= $mhs ["nama"];?></li>
            <li>NRP : <?= $mhs ["nrp"];?></li>
            <li>Jurusan : <?= $mhs ["jurusan"];?></li>
            <li>Email : <?= $mhs ["email"];?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>

