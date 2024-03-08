<?php
$komponen = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h2>Macam Macam Perangkat Keras Komputer</h2>
    <ol>
        <?php foreach($komponen as $kom) : ?>
            <li><?= $kom ?></li>
            <?php endforeach ?>
    </ol>
    <hr>

    <h2>Macam Macam Perangkat Keras Komputer Baru</h2>
    <ol>
        <?php array_push($komponen, "Card Reader", "Modem") ; asort($komponen) ?>
        <?php foreach($komponen as $kom) : ?>
        <li><?= $kom; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>