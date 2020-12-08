<?php
require 'functions.php';
$id_produk= $_GET["id"];
$produk= query("SELECT * FROM tb_produk INNER JOIN tb_status USING(id_status) INNER JOIN tb_kategori USING(id_kategori) WHERE id_produk=$id_produk") [0];

if( isset($_POST["update"])){

    if( update($_POST)> 0) {
        echo "
            <script>
                alert('Data Berhasil Diupdate');
                document.location.href='index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data Gagal Diupdate');
                document.location.href='index.php';
            </script>
        ";
    }
}

if( isset($_POST["delete"])){

    if( delete($id_produk)> 0) {
        echo "
            <script>
                alert('Data Berhasil Dihapus');
                document.location.href='index.php';
            </script>
        ";
    } else{
        echo "
            <script>
                alert('Data Gagal Dihapus');
                document.location.href='index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Acraf | Edit Product </title>
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
    <div id="edit">
        <div class="row justify-content-center">
            <h2>Edit Produk</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_produk" id="id_produk" required  value="<?= $produk["id_produk"]; ?>" >
                     <input type="hidden" name="fotoLama"   value="<?= $produk["foto_produk"]; ?>" >   

                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk"class="form-control rounded-pill" required  value="<?= $produk["nama_produk"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="owner_produk">Pemilik Produk</label>
                        <input type="text" name="owner_produk" id="owner_produk"class="form-control rounded-pill" required  value="<?= $produk["owner_produk"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="harga_produk">Harga Produk</label>
                        <input type="number" name="harga_produk" id="harga_produk"class="form-control rounded-pill" required value="<?= $produk["harga_produk"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="stok_produk">Stok Produk</label>
                        <input type="number" name="stok_produk" id="stok_produk"class="form-control rounded-pill" required value="<?= $produk["stok_produk"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi"class="form-control rounded-pill" required value="<?= $produk["lokasi"]; ?>">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control rounded-pill" name="status" id="status">
                            <option value="<?= $produk["id_status"]; ?>"><?= $produk["nama_status"]; ?></option>
                            <option value="1">Tersedia</option>
                            <option value="2">Tidak Tersedia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control rounded-pill" name="kategori" id="kategori">
                            <option value="<?= $produk["id_kategori"]; ?>"><?= $produk["nama_kategori"]; ?></option>
                            <option value="1">Souvenir</option>
                            <option value="2">Paint</option>
                            <option value="3">Furniture</option>
                            <option value="4">Statue</option>
                            <option value="5">Handcraf</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi_produk">Deskripsi Produk</label>
                        <textarea type="text" name="deskripsi_produk" id="deskripsi_produk"class="form-control rounded-pill" required><?= $produk["deskripsi_produk"]; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="foto_produk">Foto  :</label><br>
                        <img src="img/<?= $produk["foto_produk"]?>" width="50">
                        <input type="file" name="foto_produk" id="foto_produk" accept="image/*" >
                    </div>

                    <button type="sumbit" name="update" class="btn btn-primary rounded-pill">Update</button>
                    <button type="sumbit" name="delete" class="btn btn-danger rounded-pill">Delete</button>


                </form>
            </div>
        </div>
    </div>
</body>