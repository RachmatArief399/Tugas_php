<?php
if(isset($_POST['submit'])) {
  // Simpan data yang diterima dari halaman daftarakun.html
  $nama_lengkap = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Simpan data ke file txt
  $file = 'data_file.txt';
  $data = $nama . ',' . $email . ',' . $username . ',' . $password . "\n";
  file_put_contents($file, $data, FILE_APPEND);

  // Tampilkan pesan sukses ke halaman pendaftaran
  echo "<p>Terima kasih, $nama! Akun Anda berhasil didaftarkan.</p>";
} else {
  echo "<p>Tidak ada data yang diterima.</p>";
}
?>
