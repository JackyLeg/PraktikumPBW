<?php
error_reporting(E_ALL^E_DEPRECATED);
//untuk mengisi nama host, uname mysql, pass mysql dan nama database
$con = mysqli_connect("localhost", "root", "", "krs");
if (!$con) {
	die ("koneksi tidak berhasil : " . mysqli_connect_error());
}
?>
