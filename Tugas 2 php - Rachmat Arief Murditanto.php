<!DOCTYPE html>
<html>
<head>
    <title>Form Input Gaji Pegawai</title>
</head>
<body>
    <h2>Form Input Gaji Pegawai</h2>
    <form method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>

        <label for="jabatan">Jabatan:</label>
        <select id="jabatan" name="jabatan">
            <option value="manager">Manager</option>
            <option value="asisten">Asisten</option>
            <option value="kabag">Kabag</option>
            <option value="staff">Staff</option>
        </select><br><br>

        <label for="gaji_pokok">Gaji Pokok:</label>
        <input type="number" id="gaji_pokok" name="gaji_pokok"><br><br>

        <label for="status">Status:</label>
        <input type="radio" id="menikah" name="status" value="menikah">
        <label for="menikah">Menikah</label>
        <input type="radio" id="belum_menikah" name="status" value="belum_menikah">
        <label for="belum_menikah">Belum Menikah</label><br><br>

        <label for="jumlah_anak">Jumlah Anak:</label>
        <input type="number" id="jumlah_anak" name="jumlah_anak"><br><br>

        <input type="submit" name="submit" value="Hitung Gaji">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gaji_pokok = $_POST['gaji_pokok'];
        $status = $_POST['status'];
        $jumlah_anak = $_POST['jumlah_anak'];

        switch($jabatan){
            case 'manager':
                $gaji_pokok = 20000000;
                break;
            case 'asisten':
                $gaji_pokok = 15000000;
                break;
            case 'kabag':
                $gaji_pokok = 10000000;
                break;
            case 'staff':
                $gaji_pokok = 4000000;
                break;
            default:
                $gaji_pokok = 0;
        }

        $tunjangan_jabatan = 0.2 * $gaji_pokok;
        if($status == 'menikah'){
            if($jumlah_anak == 1 || $jumlah_anak == 2){
                $tunjangan_keluarga = 0.05 * $gaji_pokok;
            } elseif($jumlah_anak >= 3 && $jumlah_anak <= 5){
                $tunjangan_keluarga = 0.1 * $gaji_pokok;
            } else {
                $tunjangan_keluarga = 0;
            }
        } else {
            $tunjangan_keluarga = 0;
        }
            $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;
            $zakat_profesi = ($agama == 'islam' && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0;
			$take_home_pay = $gaji_kotor - $zakat_profesi;

		echo "Nama Pegawai: $nama<br>";
		echo "Jabatan: $jabatan<br>";
		echo "Gaji Pokok: $gapok<br>";
		echo "Tunjangan Jabatan: $tunjangan_jabatan<br>";
		echo "Tunjangan Keluarga: $tunjangan_keluarga<br>";
		echo "Gaji Kotor: $gaji_kotor<br>";
		echo "Zakat Profesi: $zakat_profesi<br>";
		echo "Take Home Pay: $take_home_pay<br>";
	?>
	</body>
</html>