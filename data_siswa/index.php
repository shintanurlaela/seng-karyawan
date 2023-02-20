<!DOCTYPE html>
<html>
<?php
$koneksi = new mysqli ("localhost","root","","data_siswa");
?>

<head>
	<title>Zacharia</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<div class="col-lg-12">
			<div class="page-header">
				<br>
				<br>
				<h2>Data Karyawan
					<a href="add.php" class="btn btn-success">Tambah Data</a>
					<a href="index.php" class="btn btn-success">Beranda</a>
				</h2>
			</div>
			<br>
			<div>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>NO</th>
							<th>No Rekening </th>
							<th>Nama Karyawan</th>
							<th>Jenis Kelamin</th>
							<th>Gaji</th>
							<th>Foto</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql_tampil = "SELECT * FROM tb_siswa";
							$query_tampil = mysqli_query($koneksi, $sql_tampil);
							$no=1;
							while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
						?>
						<tr>
							<td>
								<?php echo $no; ?>
							</td>
							<td>
								<?php echo $data['nis']; ?>
							</td>
							<td>
								<?php echo $data['nama']; ?>
							</td>
							<td>
								<?php echo $data['jekel']; ?>
							</td>
							<td>
								<?php echo $data['jurusan']; ?>
							</td>
							<td>
								<img src="foto/<?php echo $data['foto']; ?>" width="70px" />
							</td>


							<td>
								<a href="edit.php?kode=<?php echo $data['nis']; ?>" class='btn btn-warning btn-sm'>Ubah</a>
								<a href="del.php?kode=<?php echo $data['nis']; ?>" onclick="return confirm('Hapus Data Ini ?')"
								 class='btn btn-danger btn-sm'>Hapus</a>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>
					</tbody>
				</table>

			</div>
		</div>
	</div>

</body>

</html>
<!-- Elseif Channel -->