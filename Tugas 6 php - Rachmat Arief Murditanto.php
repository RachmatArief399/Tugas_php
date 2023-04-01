<?php
//Abstrak
abstract class Bentuk2D {
    abstract function luasBidang();
    abstract function kelilingBidang();
}
//class
class Lingkaran extends Bentuk2D {
    public $jari2;
    
    function namaBidang() {
        return "Lingkaran";
    }
    
    function luasBidang() {
        return pi()*$this->jari2*$this->jari2;
    }
    
    function kelilingBidang() {
        return 2*pi()*$this->jari2;
    }
}

class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;
    
    function namaBidang() {
        return "Persegi Panjang";
    }
    
    function luasBidang() {
        return $this->panjang*$this->lebar;
    }
    
    function kelilingBidang() {
        return 2 * ($this->panjang+$this->lebar);
    }
}

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    public $sisi1;
    public $sisi2;
    public $sisi3;
    
    function namaBidang() {
        return "Segitiga";
    }
    
    function luasBidang() {
        return 0.5*$this->alas*$this->tinggi;
    }
    
    function kelilingBidang() {
        return $this->sisi1+$this->sisi2+$this->sisi3;
    }
}
//kode PHP lingkaran 
$lingkaran = new Lingkaran();
$lingkaran->jari2 = 10;
echo "<table border=1>
      <tr>
        <td>Bidang</td>
        <td>Luas</td>
        <td>Keliling</td>
      </tr>
      <tr>
        <td>".$lingkaran->namaBidang()."</td>
        <td>".$lingkaran->luasBidang()."</td>
        <td>".$lingkaran->kelilingBidang()."</td>
      </tr>
      </table>";
echo "<br>";
//kode PHP persegi panjang
$persegi_panjang = new PersegiPanjang();
$persegi_panjang->panjang = 10;
$persegi_panjang->lebar = 5;
echo "<br><table border=1>
      <tr>
        <td>Bidang</td>
        <td>Luas</td>
        <td>Keliling</td>
      </tr>
      <tr>
        <td>".$persegi_panjang->namaBidang()."</td>
        <td>".$persegi_panjang->luasBidang()."</td>
        <td>".$persegi_panjang->kelilingBidang()."</td>
      </tr>
      </table>";
echo "<br>";
//kode PHP segitiga
$segitiga = new Segitiga();
$segitiga->alas = 6;
$segitiga->tinggi = 8;
$segitiga->sisi1 = 5;
$segitiga->sisi2 = 7;
$segitiga->sisi3 = 9;
echo "<br><table border=1>
      <tr>
        <td>Bidang</td>
        <td>Luas</td>
        <td>Keliling</td>
      </tr>
      <tr>
        <td>".$segitiga->namaBidang()."</td>
        <td>".$segitiga->luasBidang()."</td>
		<td>".$segitiga->kelilingBidang()."</td>
      </tr>
      </table>";
echo "<marquee> Tugas 6 PHP - Rachmat Arief Murditanto </marquee>";
?>