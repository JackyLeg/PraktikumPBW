<?php
$con = mysqli_connect("localhost", "root","", "krs");
$kodeMK = $_POST['kodeMK'];
$matkul = $_POST['matkul'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$dosen = $_POST['dosen'];
$sks = $_POST['sks'];

mysqli_query($con, "INSERT INTO krs VALUES ('$kodeMK','$matkul','$hari','$jam','$dosen','$sks')");
header ('Location: inputkrs.php')

?> 