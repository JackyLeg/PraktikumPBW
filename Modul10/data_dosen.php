<table class="table table-striped table-bordered" style="width:100%">
	<thead>
    	<tr>
        	<td>No</td>
        	<td>Nama Dosen</td>
        	<td>Alamat</td>
        	<td>Jurusan</td>
        	<td>Jenis Kelamin</td>
        	<td>Tanggal Masuk</td>
    	</tr>
	</thead>
	<tbody>
    	<?php
        	include 'koneksi_dosen.php';
        	$s_jurusan="";
        	$s_keyword="";
        	if (isset($_POST['jurusan'])) {
            	$s_jurusan = $_POST['jurusan'];
            	$s_keyword = $_POST['keyword'];
        	}
       	 
        	$search_jurusan = '%'. $s_jurusan .'%';
            $search_keyword = '%'. $s_keyword .'%';
        	$no = 1;
        	$query = "SELECT * FROM tbl_dosen WHERE jurusan LIKE ? AND (nama_dosen LIKE ? OR alamat LIKE ? OR jurusan LIKE ? OR jenis_kelamin LIKE ? OR tgl_masuk LIKE ?) ORDER BY id DESC LIMIT 100";
        	$dewan1 = $db1->prepare($query);
        	$dewan1->bind_param('ssssss', $search_jurusan, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
        	$dewan1->execute();
        	$res1 = $dewan1->get_result();
 
        	if ($res1->num_rows > 0) {
            	while ($row = $res1->fetch_assoc()) {
                	$id = $row['id'];
                	$nama_dosen = $row['nama_dosen'];
                	$alamat = $row['alamat'];
                	$jurusan = $row['jurusan'];
                	$jenis_kelamin = $row['jenis_kelamin'];
                	$tgl_masuk = $row['tgl_masuk'];
    	?>
        	<tr>
            	<td><?php echo $no++; ?></td>
            	<td><?php echo $nama_dosen; ?></td>
            	<td><?php echo $alamat; ?></td>
            	<td><?php echo $jurusan; ?></td>
            	<td><?php echo $jenis_kelamin; ?></td>
            	<td><?php echo $tgl_masuk; ?></td>
        	</tr>
    	<?php } } else { ?>
        	<tr>
            	<td colspan='7'>Tidak ada data ditemukan</td>
        	</tr>
    	<?php } ?>
	</tbody>
</table>