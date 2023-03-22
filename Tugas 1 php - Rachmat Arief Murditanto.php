<!DOCTYPE html>
<html>
<head>
	<title>Bangun Datar Jajar Genjang</title>
</head>
<body>
	<h2>Bangun Datar Jajar Genjang</h2>
	<form method="post" action="">
		<label for="alas">Alas:</label>
		<input type="text" name="alas"><br><br>

		<label for="tinggi">Tinggi:</label>
		<input type="text" name="tinggi"><br><br>

		<label for="sisi">Sisi:</label>
		<input type="text" name="sisi"><br><br>

		<input type="submit" name="hitung" value="Hitung"><br><br>
	</form>

	<?php
		if(isset($_POST['hitung'])){
			$alas = $_POST['alas'];
			$tinggi = $_POST['tinggi'];
			$sisi = $_POST['sisi'];

			$luas = $alas * $tinggi;
			echo "Luas Jajar Genjang Adalah = " . $luas . "<br>";

			$keliling = 2 * ($alas + $sisi);
			echo "Keliling Jajar Genjang Adalah = " . $keliling;
		}
	?>
</body>
</html>
