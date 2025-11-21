<?php
// Abstract class Bentuk2D
abstract class Bentuk2D {
    abstract public function cetakLuas();
    abstract public function cetakKeliling();
}

// Class BujurSangkar
class BujurSangkar extends Bentuk2D {
    private $sisi;
    private $luas;
    private $keliling;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function cetakLuas() {
        $this->luas = $this->sisi * $this->sisi;
        echo "Luas bujur sangkar adalah: {$this->luas}\n";
    }

    public function cetakKeliling() {
        $this->keliling = 4 * $this->sisi;
        echo "Keliling bujur sangkar adalah: {$this->keliling}\n";
    }
}

// Class PersegiPanjang
class PersegiPanjang extends Bentuk2D {
    private $panjang;
    private $lebar;
    private $luas;
    private $keliling;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function cetakLuas() {
        $this->luas = $this->panjang * $this->lebar;
        echo "Luas persegi panjang adalah: {$this->luas}\n";
    }

    public function cetakKeliling() {
        $this->keliling = 2 * ($this->panjang + $this->lebar);
        echo "Keliling persegi panjang adalah: {$this->keliling}\n";
    }
}

// Program utama
echo "~ HASIL PERHITUNGAN BENTUK 2D ~ \n";
$bujur = new BujurSangkar(4);
$persegiPanjang = new PersegiPanjang(4, 2);

$bujur->cetakLuas();
$bujur->cetakKeliling();
$persegiPanjang->cetakLuas();
$persegiPanjang->cetakKeliling();
?>
