<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Tambah Produk</title>
</head>
<body>
    <form action="<?php echo base_url()."index.php/admin/tambah_produk" ?>" method="POST">
        Nama : <input type="text" name="nama"><br>
        Deskripsi : <input type="text" name="deskripsi"><br>
        Harga : <input type="text" name="harga"><br>
        Stok : <input type="text" name="stok"><br>
        <form> 
            Gambar : <input type="file" name="gambar"> 
            <input type="submit" name="upload" value="Upload"> <br>
        </form>
        <input type="submit" placeholder="Tambahkan"> <input type="reset">
    </form>
</body>
</html>