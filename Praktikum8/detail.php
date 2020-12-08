<?php

require 'functions.php';
$id_produk= $_GET["id"];
$produk= query("SELECT * FROM tb_produk INNER JOIN tb_status USING(id_status) INNER JOIN tb_kategori USING(id_kategori) WHERE id_produk=$id_produk") [0];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Acraf | Detail Product </title>
    <!-- meta tag -->
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="3600"> -->
    <meta name="keywords" content="Art and Handcraf">
    <meta name="description" content="Platform penjualan barang seni dan kerajinan tangan">
    <meta name="author" content="Tim Acraf">
    <!-- link css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/fe118aecdc.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="detail">
        <div class="row justify-content-center"> 
            <h2>Detail Produk</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5 card p-4"> 
                <img src="img/<?= $produk["foto_produk"]?>" width="300" style="display: block; margin: auto;"> 
                <form action=""> 

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk"class="form-control rounded-pill" required  value="<?= $produk["nama_produk"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="owner_produk">Pemilik Produk</label>
                        <input type="text" name="owner_produk" id="owner_produk"class="form-control rounded-pill" required  value="<?= $produk["owner_produk"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="harga_produk">Harga Produk</label>
                        <input type="number" name="harga_produk" id="harga_produk"class="form-control rounded-pill" required value="<?= $produk["harga_produk"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="stok_produk">Stok Produk</label>
                        <input type="number" name="stok_produk" id="stok_produk"class="form-control rounded-pill" required value="<?= $produk["stok_produk"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi"class="form-control rounded-pill" required value="<?= $produk["lokasi"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" name="status" id="status"class="form-control rounded-pill" required value="<?= $produk["nama_status"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" id="kategori"class="form-control rounded-pill" required value="<?= $produk["nama_kategori"]; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi_produk" id="deskripsi_produk"class="form-control rounded-pill" required disabled><?= $produk["deskripsi_produk"]; ?></textarea>
                    </div>

                    <a href="index.php"name="update" class="btn btn-primary rounded-pill"> Kembali </a>
                </form>
            </div>
        </div>
    </div>
</body>