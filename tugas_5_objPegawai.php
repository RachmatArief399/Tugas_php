<?php 
require 'tugas_5_pegawai.php';

$pegawai1 = new Pegawai('01111','Andi','Manager','Islam','Menikah');

$ar_pegawai = [$pegawai1];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
$pegawai2 = new Pegawai('01112','Aulia','Manager','Islam','Menikah');

$ar_pegawai = [$pegawai3];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
$pegawai3 = new Pegawai('01113','Ameri','Staff','Islam','Menikah');

$ar_pegawai = [$pegawai3];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
$pegawai4 = new Pegawai('01114','Bagus','Kepala Bagian','Islam','Menikah');

$ar_pegawai = [$pegawai4];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
$pegawai5 = new Pegawai('01115','Candra','Kepala Bagian','Islam','Menikah');

$ar_pegawai = [$pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}
?>