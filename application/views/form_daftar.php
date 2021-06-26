<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Daftar </title>
</head>
<body>
	<h2> DAFTAR AKUN </h2>
    <form action=" <?php echo base_url()."index.php/akun/aksi_daftar" ?> " method="POST">
        Nama Lengkap : <input type="text" name="nama_lengkap"><br>
        Username : <input type="text" name="username"><br>
        Alamat : <input type="text" name="alamat"><br>
        Email : <input type="text" name="email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" placehorder="Daftar"><br>
    </form>

    <h3> Sudah Punya Akun ? </h3>
	<a href="<?php echo base_url()."index.php/akun/login"; ?> "> Login </a>

</body>
</html>