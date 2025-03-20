<?php
$mahasiswa = [
    ["Sandhika Galih", "043040023", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
    ["Doddy Ferdiansyah", "033040001", "Teknik Industri", "doddy@yahoo.com"],
    ["Erik", "023040123", "Teknik Planologi", "erik@gmail.com"],
    ["Andhika Ashari", "243040034", "Teknik Informatika", "andhikadimari02@gmail.com"],
    ["Muhammad Nazriel Bintang Putra Darajat", "243040026", "Teknik Informatika", "nazriel@gmail.com"],
    ["Dion Marshall Avalon Adhiseputro", "243040030", "Teknik Informatika", "dion@gmail.com"],
    ["Dwi Dzaky Wibowo", "243040011", "Teknik Informatika", "dzaky@gmail.com"],
    ["Ikhsan Ferdiansyah", "243040017", "Teknik Informatika", "ikhsan@gmail.com"],
    ["Reiza Mohamad Aditia", "243040024", "Teknik Informatika", "reiza@gmail.com"],
    ["Muhammad Sholeh Maulana", "243040035", "Teknik Informatika", "sholeh@gmail.com"],
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
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>NRP : <?= $mhs[1]; ?></li>
            <li>Jurusan : <?= $mhs[2]; ?></li>
            <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>