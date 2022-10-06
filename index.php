<?php
include "db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Toko Elang</title>
</head>

<body>
    <div class="container">
        <header>
            <h2>Toko Elang</h2>
        </header>
        <main>
            <form action="action.php" method="get">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
                <label for="produk">Produk</label>
                <select name="produk" id="produk">
                    <?php foreach ($data as $produk): ?>
                    <option value="<?= $produk["nama"] ?>"><?= $produk["nama"] ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Cari">
            </form>
        </main>
    </div>
</body>

</html>