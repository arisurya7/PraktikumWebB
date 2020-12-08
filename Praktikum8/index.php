<?php

require 'functions.php';
$produk=query("SELECT * FROM tb_produk");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Acraf | Art and Handcraf</title>
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

<body data-spy="scroll" data-target="#navbarResponsive">
<!-- product -->
<div id="product">
    <h3 class="heading text-center">Product</h3>
    <div class="heading-underline"></div>

    <!-- tambah produk -->
    <div class="row justify-content-first">
        <div class="col-md-2">
        <form action="" method="">
            <a href="add.php" class="btn btn-primary">Add Produk </a>
        </form>
        </div>
    </div>
    <!-- akhir tambah produk -->
    <!-- row produk -->
    <div class="row justify-content-center">
      <!-- produk -->
      <?php foreach ($produk as $data): ?>
      <div class="col-md-2">
        <div class="card text-center">
          <img  class="card-img-top"src="img/<?php echo $data["foto_produk"]?>" alt="">
          <div class="card-body">
            <p class="product-title color-palette1"><?php echo $data["nama_produk"] ?></p>
            <p class="product-owner">by <?php echo $data["owner_produk"] ?></p>
            <p class="procuct-price"><?php echo  $harga = "Rp " . number_format($data["harga_produk"],0,',','.'); ?></p>
            <a href="edit.php?id=<?php echo $data["id_produk"];?>" class="btn btn-primary rounded-pill">Edit</a>
            <a href="detail.php?id=<?php echo $data["id_produk"];?>" class="btn btn-warning rounded-pill">Detail</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <!-- akhir produk -->
    </div>
    <!-- row produk -->                
</div>
<!-- end product -->
</body>


    <!-- javacript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>