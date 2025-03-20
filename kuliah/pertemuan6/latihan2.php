<?php
// Mencetak array menggunakan looping
$animals = ['🐼', '😺', '🐶', '🐨', '🦁', '🐔', '🐍'];
$foods = ['🍜', '🥩', '🍛', '🍫', '🥘'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Array</title>
</head>

<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($animals); $i++) { ?>
            <li><?php echo $animals[$i]; ?> </li>
        <?php } ?>
    </ul>
</body>

<h2>Daftar Makanan</h2>
<ul>
    <?php for ($i = 0; $i < count($foods); $i++) { ?>
        <li><?php echo $foods[$i]; ?> </li>
    <?php } ?>
</ul>

<h2>Daftar Binatang Baru</h2>
<ul>
    <?php foreach ($animals as $a) : ?>
        <li><?= $a; ?></li>
    <?php endforeach ?>
</ul>

<h2>Daftar Makanan Baru</h2>
<ul>
    <?php foreach ($foods as $f) : ?>
        <li><?= $f; ?></li>
    <?php endforeach ?>
</ul>

</html>