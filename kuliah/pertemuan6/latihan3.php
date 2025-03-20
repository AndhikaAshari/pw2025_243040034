<?php
// Array Bersarang / Nested Array
$mahasiswa = [
    ['Andhika', '243040034', 'andhikadimari02@gmail.com', 'Teknik Informatika'],
    ['Ican', '243040000', 'icandimari@gmail.com', 'Teknik Perlautan',]
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>

    <?php endforeach; ?>
</body>

</html>