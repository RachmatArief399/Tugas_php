<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4 Rachmat Arief Murditanto - Kelompok 1</title>
</head>
<body>
	<div class="form-style-10">
	<h1>Tugas 4<span>Rachmat Arief Murditanto</span></h1>
	<fieldset style="background-color:aquamarine;">
    <legend>Form Registrasi</legend>
	<form method="post" action="tugas_4_hasil_skill.php">
		<label for="nim">Nama :</label>
		<input type="text" name="nim" id="nama" required><br>
		<label for="nama">NIM :</label>
		<input type="text" name="nama" id="nim" required><br>
		<label for="jenis_kelamin">Jenis Kelamin :</label>
		<input type="radio" name="jenis_kelamin" value="Laki-laki" required>Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan<br>

	<label for="program_studi">Program Studi :</label>
	<select name="program_studi" required>
		<option value="Teknik Informatika">Teknik Informatika</option>
		<option value="Sistem Informasi">Sistem Informasi</option>
	</select><br>

	<label for="skill">Skill   :</label>
	<input type="checkbox" name="skill[]" value="HTML">HTML
	<input type="checkbox" name="skill[]" value="CSS">CSS
	<input type="checkbox" name="skill[]" value="Javascript">Javascript
	<input type="checkbox" name="skill[]" value="RWD Bootstraps">RWD Bootstraps
	<input type="checkbox" name="skill[]" value="Python">Python
	<input type="checkbox" name="skill[]" value="PHP">PHP
	<input type="checkbox" name="skill[]" value="MySQL">MySQL
	<input type="checkbox" name="skill[]" value="Laravel">Laravel<br><br>
	<button type="submit">Submit</button>
</fieldset>
</form>
</body>
</html>
