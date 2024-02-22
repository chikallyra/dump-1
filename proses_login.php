<?php 
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password' LIMIT 1";
$query = mysqli_query($konek, $sql);
$cek = mysqli_fetch_array($query);

if ($cek > 0) {
	$_SESSION['username'] = $cek[1];
	echo "<script> 
            alert('Anda akan diarahkan ke halaman utama');
            window.location='main.php';
    
    </script>";
}else{
	echo "<script> 
            alert('Username atau Password tidak ditemukan!');
            window.location='login.php';
    
    </script>";
}

 ?>