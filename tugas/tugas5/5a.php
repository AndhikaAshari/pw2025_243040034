<?php
$mahasiswa = [
    [
        "nama" => "Sandhika Galih",
        "nrp" => "043040023",
        "Jurusan" => "Teknik Informatika",
        "Email" => "sandhikagalih@unpas.ac.id"
    ],

    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "Jurusan" => "Teknik Industri",
        "Email" => "doddy@yahoo.com"
    ],

    [
        "nama" => "Erik",
        "nrp" => "023040123",
        "Jurusan" => "Teknik Planologi",
        "Email" => "erik@gmail.com"
    ],

    [
        "nama" => "Andhika Ashari",
        "nrp" => "243040034",
        "Jurusan" => "Teknik Informatika",
        "Email" => "andhikadimari02@gmail.com"
    ],

    [
        "nama" => "Muhammad Nazriel Bintang Putra Darajat",
        "nrp" => "243040026",
        "Jurusan" => "Teknik Informatika",
        "Email" => "nazriel@gmail.com"
    ],

    [
        "nama" => "Dion Marshall Avalon Adhiseputro",
        "nrp" => "243040030",
        "Jurusan" => "Teknik Informatika",
        "Email" => "dion@gmail.com"
    ],

    [
        "nama" => "Dwi Dzaky Wibowo",
        "nrp" => "243040011",
        "Jurusan" => "Teknik Informatika",
        "Email" => "dzaky@gmail.com"
    ],

    [
        "nama" => "Ikhsan Ferdiansyah",
        "nrp" => "243040017",
        "Jurusan" => "Teknik Informatika",
        "Email" => "ikhsan@gmail.com"
    ],

    [
        "nama" => "Reiza Mohamad Aditia",
        "nrp" => "243040024",
        "Jurusan" => "Teknik Informatika",
        "Email" => "reiza@gmail.com"
    ],

    [
        "nama" => "Muhammad Sholeh Maulana",
        "nrp" => "243040035",
        "Jurusan" => "Teknik Informatika",
        "Email" => "sholeh@gmail.com"
    ],

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
            <li>Email : <?= $mhs["Email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>