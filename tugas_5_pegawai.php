<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    public $agama;
    public $status;
    public $gapok;
    public $tunjanganJabatan;
    public $tunjanganKeluarga;
    public $zakatProfesi;
    public $gajiBersih;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status,){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        $this->gajiPokok = 0;
        $this->tunjanganJabatan = 0;
        $this->tunjanganKeluarga = 0;
        $this->zakatProfesi = 0;
        $this->gajiBersih = 0;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian ': $gapok = 7000000; break;
            case 'Staff ': $gapok = 5000000; break;
            default: $gapok;
        }
        return $gapok;
    }
	public function setTunjanganJabatan($gapok) {
        $this->tunjanganJabatan = $tunjanganJabatan = $gapok * 0.2;;
    }
    public function setTunjanganKeluarga() {
        $this->tunjanganKeluarga = $this->status === 'Menikah' ? 0.1 * $this->gajiPokok : 0;
    }

    public function setZakatProfesi() {
        if ($this->agama === 'Islam' && $this->gajiKotor() >= 6000000) {
            $this->zakatProfesi = 0.025 * $this->gajiPokok;
        }
    }

    public function setGajiBersih() {
        $this->gajiBersih = $this->gajiKotor() - $this->zakatProfesi;
    }

    private function gajiKotor() {
        return $this->gajiPokok + $this->tunjanganJabatan + $this->tunjanganKeluarga;
    }
    public function cetak(){
        echo 'NIP Pegawai '.$this->nip;
        echo '<br>Nama Pegawai '.$this->nama;
        echo '<br>Jabatan '. $this->jabatan;
        echo '<br>Agama '.$this->agama;
        echo '<br>Status '.$this->status;
        echo '<br>Gaji Pokok Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
		echo '<br>Tunjangan Jabatan: ' .number_format($this->setTunjanganJabatan($this->gapok),0,',','.');
        echo '<br>Tunjangan Keluarga: ' . $this->tunjanganKeluarga;
        echo '<br>Zakat Profesi: ' . $this->zakatProfesi;
        echo '<br>Gaji Bersih: ' . $this->gajiBersih;
        echo '<hr>';

    }

}



?>