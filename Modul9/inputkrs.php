<?php 
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Input KRS</title>
</head>
<body>
	<h2>Form Input KRS</h2>
	<form method="POST" action="outputkrs.php">
		<table border="1">
			<tr>
				<th>Kode MK</th> 
				<th>Mata Kuliah</th>
				<th>Hari</th>
				<th>Jam</th>
				<th>Dosen</th>
				<th>SKS</th>
				<th>Pilih</th>
			</tr>
			<?php
			$sql = mysqli_query($con, "SELECT * FROM krs");
			while ($hasil = mysqli_fetch_array($sql)){
				?>
				<tr>
					<td><?=$hasil['kode_mk']?></td>
					<td style="text-align: left;"><?=$hasil['nama_mk']?></td>
					<td><?= $hasil['hari']?></td>
					<td><?= $hasil['jam']?></td>
					<td><?= $hasil['dosen']?></td>
					<td><?= $hasil['sks']?></td>
					<td>
						<input type="checkbox" name="mk[]" value="<?= $hasil['kode_mk']?>">
					</td>
				</tr>
				<?php
			}
			?>
		</table>
		<br>
		<button type="submit" id="submit" name="submit">Approve</button>
	</form>
	<br>
	<form method="POST" action="insert.php">
   	<table border="1">
		<tr>
			<th>KodeMK</th>
			<th>Mata Kuliah</th>
			<th>Hari</th>
			<th>Jam</th>
			<th>Dosen</th>
			<th>SKS</th>
		</tr>
		<tr>
	  		<td><input type="text" name="kodeMK"></td>
			<td><input type="text" name="matkul"></td>
			<td><input type="text" name="hari"></td>
			<td><input type="text" name="jam"></td>
			<td><input type="text" name="dosen"></td>
			<td><input type="text" name="sks"></td>
        </tr>
   </table> 
   <br>
   <button type="submit" id="submit" name="submit">Insert</button>
</form>

	
</body>
</html>
