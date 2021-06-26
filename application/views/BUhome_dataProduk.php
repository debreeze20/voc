<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Product </title>
</head>
<body>

<div id="container">
	<h2> DAFTAR PRODUK </h2>
	<a href="<?php echo base_url()."index.php/admin/baca_form"; ?>"> Tambah Data </a> <br>
    <a href="<?php echo base_url()."index.php/akun/baca_anggota"; ?>"> Daftar </a> <br>

	<table border="1">
		<tr>
			<td> No </td>
			<td> Nama </td>
			<td> Deskripsi </td>
			<td> Harga </td>
            <td> Stok </td>
            <td> Gambar </td>
		</tr>
		
		<?php foreach($dataMu as $dat) { ?>
			<tr>
				<td><?php echo $dat['no']; ?></td>
				<td><?php echo $dat['nama']; ?></td>
				<td><?php echo $dat['deskripsi']; ?></td>
				<td><?php echo $dat['harga']; ?></td>
                <td><?php echo $dat['stok']; ?></td>
                <td><?php echo $dat['gambar']; ?></td>
				<td>
					<a href="<?php echo base_url()."index.php/admin/hapus_data/".$dat['no']; ?>"> Hapus  </a>
					<a href="<?php echo base_url()."index.php/admin/ambil_DataWhere/".$dat['no']; ?>"> Update </a>
				</td>
			</tr>
		<?php } ?>
	</table>

	<a href="<?php echo base_url()."index.php/akun/logout"; ?> "> Log Out </a>

</div>

</body>
</html>