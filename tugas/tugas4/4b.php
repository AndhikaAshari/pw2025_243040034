<?php
$perangkat_lama = [
    "Motherboard",
    "Processor",
    "Hard Disk",
    "PC Cooler",
    "VGA Card",
    "SSD"
];

$perangkat_baru = [
    "Card Reader",
    "Hard Disk",
    "Modem",
    "Motherboard",
    "PC Cooler",
    "Processor",
    "SSD",
    "VGA Card"
];
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras Komputer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            color: #333;
        }
    </style>
</head>

<body>

    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($perangkat_lama as $item): ?>
            <li><?= $item; ?></li>
        <?php endforeach; ?>
    </ol>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php foreach ($perangkat_baru as $item): ?>
            <li class="<?= ($item == 'Card Reader' || $item == 'Modem') ? 'highlight' : ''; ?>">
                <?= $item; ?>
            </li>
        <?php endforeach; ?>
    </ol>

</body>

</html>