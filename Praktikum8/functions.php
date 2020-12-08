<?php
//KONEKSI DATABASE
$conn=mysqli_connect('localhost','root','','db_produkacraf');

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows=[];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}


function add($data){
    global $conn;
     //ambil data dari setiap form
     $nama_produk= $data["nama_produk"];
     $owner_produk= $data["owner_produk"];
     $harga_produk= $data["harga_produk"];
     $stok_produk= $data["stok_produk"];
     $lokasi= $data["lokasi"];
     $status = $data["status"];
     $deskripsi_produk= $data["deskripsi_produk"];
     $kategori= $data["kategori"];
     
    //upload foto
    $foto_produk=upload();
    if( !$foto_produk){
        return false;
    }

    //query insert data
    $query= "INSERT INTO tb_produk VALUES('','$nama_produk',$harga_produk, $stok_produk, '$lokasi', $status, '$deskripsi_produk',$kategori,
    '$foto_produk','$owner_produk')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;
     //ambil data dari setiap form
     $id_produk= $data["id_produk"];
     $nama_produk= $data["nama_produk"];
     $owner_produk= $data["owner_produk"];
     $harga_produk= $data["harga_produk"];
     $stok_produk= $data["stok_produk"];
     $lokasi= $data["lokasi"];
     $status = $data["status"];
     $deskripsi_produk= $data["deskripsi_produk"];
     $kategori= $data["kategori"];
     $fotoLama=$data["fotoLama"];
    
     //cek user apakah user milih foto baru atau tidak
     if( $_FILES["foto_produk"]["error"]=== 4){
         $foto=$fotoLama;
     } else{
         $foto=upload();
     }
     //query insert data
    $query= "UPDATE tb_produk SET
            nama_produk='$nama_produk',
            harga_produk=$harga_produk,
            stok_produk=$stok_produk,
            lokasi='$lokasi',
            id_status = $status,
            deskripsi_produk= '$deskripsi_produk',
            id_kategori= $kategori,
            foto_produk= '$foto',
            owner_produk='$owner_produk'
            WHERE id_produk=$id_produk
    ";
    var_dump($id_produk);
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM tb_produk WHERE id_produk=$id");
    return mysqli_affected_rows($conn);

}


function upload(){
    $namaFile=$_FILES['foto_produk']['name'];
    $ukuranFile=$_FILES['foto_produk']['size'];
    $error=$_FILES['foto_produk']['error'];
    $tmpName=$_FILES['foto_produk']['tmp_name'];

    //cek apaakah tidak ada foto diupload
    //error 4 artinya tidak ada foto yang diupload;
    if( $error!=0 ){
        echo "
            <script>
                alert('Pilih Gambar Terlebih Dahulu');
            </script>
        ";
        return false;
    }

    //cek apakah yng diupload itu foto
    $ekstensiGambarValid=['jpg', 'jpeg','png'];
    $ekstensiGambar=explode('.',$namaFile);
    $ekstensiGambar= strtolower(end($ekstensiGambar));
    if( ! in_array($ekstensiGambar, $ekstensiGambarValid )) {
        echo "
            <script>
                alert('Yang Anda Upload Bukan Gambar');
            </script>
        ";
        return false;
    }

    //cek ukuran dalam byte
    if( $ukuranFile > 1000000){
        echo "
            <script>
                alert('Ukuran Gambar Lebih Dari 1 Mb');
            </script>
        ";
        return false;
    }
    //lolos mengecekan
    //generate nama foto baru
   
    $namaFileBaru=uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
     //memindahkan data
    move_uploaded_file($tmpName, 'img/'.$namaFileBaru );
    return $namaFileBaru;  
}

?>