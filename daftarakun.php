<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Akun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>
</head>
<body>
	
<!-- bagian header template -->

	<!-- akhir bagian header template -->
	
	<div class="wrap">		
<header class="w3-container w3-center w3-padding-32">
<h1><b>Akun Resmi</b></h1>
<p>SMK ABC - Citeureup, Bogor</p>
<p>.</p>
</header>

		<!-- bagian menu		 -->
		<nav class="menu">
			<ul>
				<li><a href="Beranda.html">Beranda</a></li>
				<li><a href="visimisi.html">Visi & Misi</a></li>
				<li><a href="Jurusan.html">Jurusan</a></li>
				<li><a href="Daftarsekolah.html">Daftar</a>
				<li><a href="Tentang.html">Tentang</a>
				</li>
			</ul>
		</nav>
 
 <div class="form-style-10">
<h1>Daftar Akun<span>Sebelum Mendaftar Sekolah</span></h1>
	<div class="kotak_login">
		<p class="tulisan_login">Silakan Daftar</p>

		 <form method="POST" action="submit.php">
		
			<label>Nama Lengkap</label>
			<input type="text" name="name" class="form_login" placeholder="Nama Lengkap Anda .."required>
			
			<label>Nomor Whatsapp</label>
			<input type="number" name="phone_number" class="form_login" placeholder="Nomor Whatsapp Aktif .." required>
			
			<label>Gender</label>
			<input type="radio" name="gender" value="L" checked required> Laki-laki &nbsp;&nbsp;
			<input type="radio" name="gender" value="P" required> Perempuan&nbsp;&nbsp;
			
			<label>Email</label>
			<input type="text" name="email" class="form_login" placeholder="Email .." required>
		
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .."required>
 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="Password .."required>
 
 			<label>Password Confirm</label>
			<input type="text" name="password" class="form_login" placeholder="Password Confirm .."required>
			
			<center><button type="submit" class="btn btn-primary">Daftar</button><center>
 
			<br/>
			<br/>
			<center>
				<p><a class="link" href="sri dewi.html"><< kembali</a> | <a class="link" href="sri dewi.html">Beranda</a> | <a class="link" href="login.html">Login >></a></p>
			</center>
		</form>
		
	</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>