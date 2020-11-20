<?php

$nama='I Kadek Ari Surya';
$nim='1808561026';
$nilaiTugas=60;
$nilaiUTS=50;
$nilaiUAS=50;

$nilaiAkhir=hitungNA($nilaiTugas,$nilaiUTS,$nilaiUAS);
$predikat=predikatNA($nilaiAkhir);

function hitungNA($A, $B, $C){
    return (0.4*$A)+(0.3*$B)+(0.3*$C);
}

function predikatNA($NA){
    if($NA>=80)       return 'A';
    else if($NA>=70)  return 'B';
    else if($NA>=60)  return 'C';
    else              return 'D';
}

?>



<!Doctype html>
<html lang="en">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="Nilai Mahasiswa">
    <meta name="author" content="I Kadek Ari Surya - 1808561026">

    <!-- Title -->
    <title>Praktikum 7 | PHP </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
   <div class="container mt-5">
       <div class="row justify-content-center">
           <div class="content shadow rounded p-5">
                <h2>Nilai Akhir Mahasiswa</h2>
                <br>
                <table class="table table-bordered">
                    <tr>
                        <td>Nama </td>
                        <th><?php echo $nama; ?></th>
                    </tr>
                    <tr>
                        <td>NIM </td>
                        <th><?php echo $nim; ?></th>
                    </tr>
                    <tr>
                        <td>Nilai Tugas Anda </td>
                        <th><?php echo $nilaiTugas; ?></th>
                    </tr>
                    <tr>
                        <td>Nilai UTS Anda </td>
                        <th><?php echo $nilaiUTS; ?></th>
                    </tr>
                    <tr>
                        <td>Nilai UAS Anda </td>
                        <th><?php echo $nilaiUAS; ?></th>
                    </tr>
                    <tr>
                        <td>Nilai Akhir Anda </td>
                        <th><?php echo $nilaiAkhir; ?></th>
                    </tr>
                    <tr>  
                        <?php if($predikat!='D') { ?>
                            <th colspan="2" class="bg-success text-white text-center"><?php echo 'Anda Dinyatakan Lulus Dengan Predikat '.$predikat;?></th>   
                        <?php }else{ ?>
                            <th colspan="2" class="bg-danger text-white text-center"><?php echo 'Maaf Anda Tidak Lulus, Predikat '.$predikat;?></th>
                        <?php }?>
                    </tr>
                </table>
           </div>
       </div>
   </div>
   
</body>
</html>

