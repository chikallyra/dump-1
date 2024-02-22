<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "INSERT INTO tb_user (username, password, nama, no_hp, email) VALUES ('$username', '$password', '$nama', '$nohp', '$email')";
$go = mysqli_query($konek, $query);

if ($go) {
	 echo "<script> 
            alert('Anda Berhasil ditambahkan!');
            window.location='login.php';
    
    </script>";
}else{
	 echo "<script> 
            alert('Data Gagal ditambahkan!');
            window.location='main.php';
    
    </script>";
}


 ?>