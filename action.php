<?php
    include 'db.php';

    foreach ($data as $produk) {
        if ($produk['nama'] == $_GET['produk']) {
            $namaProduk = $produk['nama'];
            $hargaProduk = $produk['harga'];
            $stokProduk = $produk['jumlah'];
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Detail</title>
</head>

<body>
    <div class="container">
        <header>
            <h2><?= 'Halo, '. $_GET['nama'] ?></h2>
        </header>
        <main>
            <article>
                <p>Detail pilihan produk</p>
            </article>

            <table>
                <tr>
                    <td>Nama</td>
                    <td> : </td>
                    <td><?= $namaProduk ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td> : </td>
                    <td>Rp.<?= $hargaProduk ?>,00</td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td> : </td>
                    <td><?= $stokProduk ?></td>
                </tr>
            </table>

            <a href="index.php" class="btn">Kembali</a>
        </main>
    </div>
</body>

</html>