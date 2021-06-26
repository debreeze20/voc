<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Login </title>
</head>
<body>
	<h2> LOGIN AKUN </h2>
    <form action=" <?php echo base_url()."index.php/akun/aksi_login"; ?> " method="POST">
        username : <input type="text" name="identitas"><br>
        password : <input type="password" name="nama"><br>
        <input type="submit" name="login"><br>
    </form> 

    <h3> Belum Punya Akun ? </h3>
	<a href="<?php echo base_url()."index.php/akun/daftar"; ?> "> Daftar </a>

</body>
</html>