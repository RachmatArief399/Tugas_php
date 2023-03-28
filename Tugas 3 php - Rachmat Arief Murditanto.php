<?php 
$m1 = ['NIM'=>'01111021', 'nama'=>'Andi', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Aini', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Ari', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Aji', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Ali', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Ai', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Bani', 'nilai'=>85];
$mahasiswa = [$m1,$m1,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat']


/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case



*/
?>

<table border="1px" width="100%" bgcolor="blue">
<thead>
    
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
//grade 
if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
else if ($mhs['nilai']>= 75 && $mhs['nilai'] < 80) $grade = 'B';
else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade = '';
else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade = 'D';
else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 29) $grade = 'E';
else $grade = '';
 $total = 0;
 $max_predikat = '';

foreach($mahasiswa as $mhs){
    $predikat = ($mhs['nilai']>= 85 && $mhs['nilai'] <= 100) ? 'Sangat Memuaskan' : (($mhs['nilai']>= 75 && $mhs['nilai'] < 85) ? 'Memuaskan' : (($mhs['nilai']>= 60 && $mhs['nilai'] < 75) ? 'Cukup' : (($mhs['nilai']>= 30 && $mhs['nilai'] < 60) ? 'Kurang Memuaskan' : 'Sangat Kurang Memuaskan')));
    if($max_predikat == '' || $mhs['nilai'] > $mahasiswa[array_search($max_predikat, array_column($mahasiswa, 'predikat'))]['nilai']){
        $max_predikat = $predikat;
    }
}

    ?>
    <tr>
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $ket ?></td>
		<td><?= $grade ?></td>
		<td><?= $predikat ?></td>
</tr>
</tbody>

<?php $no++; } ?>
</tbody>
<tbody>
    <tr>
        <td colspan="3">Jumlah Mahasiswa</td>
        <td><?php echo count($mahasiswa); ?></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">Nilai Tertinggi</td>
        <td><?php echo max(array_column($mahasiswa, 'nilai')); ?></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">Nilai Terendah</td>
        <td><?php echo min(array_column($mahasiswa, 'nilai')); ?></td>
        <td colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">Rata-rata</td>
        <td>
            <?php
                $total = 0;
                foreach($mahasiswa as $mhs){
                    $total += $mhs['nilai'];
                }
                $rata_rata = $total/count($mahasiswa);
                echo round($rata_rata, 2);
            ?>
        </td>
        <td colspan="3"></td>
    </tr>
	<tr>
    <td colspan="3">Predikat Tertinggi</td>
    <td colspan="4"><?php echo $max_predikat; ?></td>
</tr>

</tbody>