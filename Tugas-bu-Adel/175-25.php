<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    pilih tanggal :
    <select name="tgl" >
        <?php
        for ($i = 1; $i <=31; $ii++){
            echo "<option value = $i </option>";
        }

        ?>
        pilih bulan :
        <select name="blm">
        <?php
        for ($i = 1; $i <=12; $ii++){
            echo "<option value = bulan-$i > bulan-$i </option>";
        }

        ?>
        pilih tahun :
        <select name="thn">
        <?php
        for ($i = 1980 $i <=2025; $ii++){
            echo "<option value = $i > $i </option>";
        }
        ?>
        </select>
</body>
</html>