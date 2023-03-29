<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4 Rachmat Arief Murditanto - Kelompok 1</title>
</head>
<body>
	<h1>Tugas 4 Rachmat Arief Murditanto - Kelompok 1</h1>
	<?php
	$nilai_skill = 0;
	$skill = $_POST['skill'];

	foreach($skill as $s) {
		switch($s) {
			case 'HTML':
				$nilai_skill += 20;
				break;
			case 'CSS':
				$nilai_skill += 20;
				break;
			case 'Javascript':
				$nilai_skill += 20;
				break;
			case 'RWD Bootstraps':
				$nilai_skill += 20;
				break;
			case 'Python':
				$nilai_skill += 20;
				break;
			case 'PHP':
				$nilai_skill += 30;
				break;
			case 'MySQL':
				$nilai_skill += 30;
				break;
			case 'Laravel':
				$nilai_skill += 40;
				break;
			default:
				break;
		}
	}

	function kategori_skill($nilai) {
		if($nilai >= 0 && $nilai <= 40) {
			return 'Kurang';
		} else if($nilai >= 41 && $nilai <= 60) {
			return 'Cukup';
		} else if($nilai >= 61 && $nilai <= 100) {
			return 'Baik';
		} else if($nilai >= 101 && $nilai <= 150) {
			return 'Sangat Baik';
		} else {
			return 'Tidak Memadai';
		}
	}

	$kategori = kategori_skill($nilai_skill);

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$program_studi = $_POST['program_studi'];
	$email = $nim.'@example.com';

	echo "NIM : $nim<br>";
	echo "Nama : $nama<br>";
	echo "Jenis Kelamin : $jenis_kelamin<br>";
	echo "Program Studi : $program_studi<br>";
	echo "Skill : $nilai_skill dari 150<br>";
	echo "Kategori : $kategori<br>";
	echo "Email : $nim@nurulfikri.ac.id<br>";
	?>
</body>
</html>