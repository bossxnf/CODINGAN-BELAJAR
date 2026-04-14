<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Motor</title>
</head>
<body>
<h2>Tabel Motor</h2>
<br/>
<a href="">Input Motor</a>
<br/>
<br/>
<table border="1">
	<tr>
		<th>No</th>
		<th>Merk</th>
		<th>Jenis Type</th>
		<th>Cylinder</th>
		<th>Tahun Rakit</th>
		<th>Warna</th>
		<th>Harga</th>
		<th>Action</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi,"select * from db_motor");
	while($d = mysqli_fetch_array($data)){
		?>
        <tr>
        	<td><?php echo $no++; ?></td>
        	<td><?php echo $d['merk']; ?></td>
        	<td><?php echo $d['type']; ?></td>
        	<td><?php echo $d['cilinder']; ?></td>
        	<td><?php echo $d['thn_perakitan']; ?></td>
        	<td><?php echo $d['warna']; ?></td>
        	<td><?php echo $d['harga']; ?></td>
        	<td>
        		<a href="">Edit</a>
        		<a href="del_motor.php?id_motor=<?php echo $d['id_motor']; ?>">Hapus</a>	
        	</td>
        </tr>
		<?php
	}
	?>
</table>
</body>
</html>