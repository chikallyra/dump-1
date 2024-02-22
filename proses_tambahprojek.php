<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$deadline = $_POST['deadline'];

$query = "INSERT INTO tb_projek (nama, deskripsi, harga, deadline) VALUES ('$nama',  '$deskripsi', '$harga', '$deadline')";
$go = mysqli_query($konek, $query);

if ($go) {
	 echo "<script> 
            alert('Anda Berhasil ditambahkan!');
            window.location='main.php#data';
    
    </script>";
}else{
	 echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='tambah_projek.html';
    
    </script>";
  
}


 ?>