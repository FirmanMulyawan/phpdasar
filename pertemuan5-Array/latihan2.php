<?php
// pengulangan pada array
// for | forEach (khusus array)
$angka = [3, 2, 15, 20, 11, 12, 44];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .dive {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .s {
            background-color: pink;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="dive"><?php echo $angka[$i]; ?></div>
    <?php } ?>

     <div class="clear"></div>

    <?php foreach($angka as $a ) { ?>
        <div class="dive s"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $a ) : ?>
        <div class="dive s"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>