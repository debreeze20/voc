<!DOCTYPE html>
<html lang="en">
<head>
    <title> Produk </title>
</head>
<body>

    <?php foreach($dataMu as $dat) { ?>
        <form action="<?php echo base_url()."index.php/admin/tambah_produk" ?>" method="POST">
            No : <input type="text" name="id" readonly value="<?php echo $dat['id']; ?>"><br>
            Nama : <input type="text" name="nama" value="<?php echo $dat['nama']; ?>"><br>
            Deskripsi : <input type="text" name="deskripsi" value="<?php echo $dat['deskripsi']; ?>"><br>
            Harga : <input type="text" name="harga" value="<?php echo $dat['harga']; ?>"><br>
            Stok : <input type="text" name="stok" value="<?php echo $dat['stok']; ?>"><br>
            <form> 
                Gambar : <input type="hidden" name="old_image" value="<?php echo $product->gambar ?>">
            </form>
            <input type="submit" placeholder="Update"> <input type="reset">
        </form>
     <?php } ?>
     
</body>
</html>