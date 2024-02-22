<?php 
$konek = mysqli_connect("localhost","root","","db_quiz");
 
// Check connection
if (!$konek) {
	echo "koneksi error";
}
?>