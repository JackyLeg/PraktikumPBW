<?php 
include 'db.php';

if(isset($_POST['mk'])){
	mysqli_query($con,"DELETE FROM `jadwal`");
	$mk = $_POST['mk'];
	foreach($mk as $value){
		mysqli_query($con, "INSERT INTO `jadwal`(`kode_mk`) VALUES ('".$value."')");
	}
}

if(isset($_POST['mkdrop'])){
	$mkdrop = $_POST['mkdrop'];
	foreach($mkdrop as $value){
		mysqli_query($con,"DELETE FROM `jadwal` WHERE `kode_mk` = ".$value."");
	}
}
?>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
	<br>
	<div class="container-sm">
		<h3 class="border-bottom">Kartu Rencana Studi</h3>
		<form method="POST" action="outputkrs.php">
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th>Kode MK</th>
					<th>Mata Kuliah</th>
					<th>Hari</th>
					<th>Jam</th>
					<th>Dosen</th>
					<th>SKS</th>
					<th>Select</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = mysqli_query($con,"SELECT * FROM `krs` INNER JOIN `jadwal` ON krs.kode_mk = jadwal.kode_mk");
				$skscount = 0;
				while( $hasil = mysqli_fetch_array($sql)){?>
				<tr>
					<td><?= $hasil['kode_mk'] ?></td>
					<td><?= $hasil['nama_mk'] ?></td>
					<td><?= $hasil['hari'] ?></td>
					<td><?= $hasil['jam'] ?></td>
					<td><?= $hasil['dosen'] ?></td>
					<td><?= $hasil['sks'] ?></td>
					<td><input type="checkbox" name="mkdrop[]" value="<?= $hasil['kode_mk']; ?>"></td>
					<?php $skscount += $hasil['sks'] ?>
				</tr>
				<?php	}?>
				<tr>
					<td colspan="4"></td>
					<td>SKS TOTAL</td>
					<td><?= $skscount ?></td>
					<td></td>
				</tr>
			</tbody>
		</table>

		
		<?php if($skscount > 24){
			echo "Maaf tidak bisa memilih lebih dari 24 SKS!<br>Mohon ulangi pengisian kembali!<br><br>";
		} ?>
		<a class="btn btn-secondary" href="inputkrs.php">Back</a>
		<button class="btn btn-danger" type="submit" value="submit">Drop Selected</button>
		</form>
	</div>
</body>
</html>
