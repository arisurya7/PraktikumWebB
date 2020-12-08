<?php

require 'functions.php';

if( isset($_POST["add"])){

    if( add($_POST)> 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
                document.location.href='index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Acraf | Add Product </title>
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
    <div id="add">
        <div class="row justify-content-center">
            <h2>Tambah Barang</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk"class="form-control rounded-pill" required placeholder="masukan nama produk">
                    </div>

                    <div class="form-group">
                        <label for="owner_produk">Pemilik Produk</label>
                        <input type="text" name="owner_produk" id="owner_produk"class="form-control rounded-pill" required placeholder="masukan nama anda">
                    </div>

                    <div class="form-group">
                        <label for="harga_produk">Harga Produk</label>
                        <input type="number" name="harga_produk" id="harga_produk"class="form-control rounded-pill" required placeholder="masukan harga produk">
                    </div>

                    <div class="form-group">
                        <label for="stok_produk">Stok Produk</label>
                        <input type="number" name="stok_produk" id="stok_produk"class="form-control rounded-pill" required placeholder="masukan jumlah stock">
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi"class="form-control rounded-pill" required placeholder="masukan lokasi">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control rounded-pill" name="status" id="status">
                            <option value="">- pilih status</option>
                            <option value="1">Tersedia</option>
                            <option value="2">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control rounded-pill" name="kategori" id="kategori">
                            <option value="">- pilih kategori</option>
                            <option value="1">Souvenir</option>
                            <option value="2">Paint</option>
                            <option value="3">Furniture</option>
                            <option value="4">Statue</option>
                            <option value="5">Handcraf</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi_produk" id="deskripsi_produk"class="form-control rounded-pill" required placeholder="masukan dekripsi produk"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="foto_produk">Pilih Foto</label>
                        <input type="file" name="foto_produk" id="foto_produk" accept="image/*" >
                    </div>

                    <button type="sumbit" name="add" class="btn btn-primary rounded-pill">Add Produk</button>
                </form>
            </div>
        </div>
    </div>
</body>