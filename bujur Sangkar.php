<?php

class BujurSangkar {
    public function hitungLuas($sisi) {
        return $sisi * $sisi;
    }

    public function hitungKeliling($sisi) {
        return 4 * $sisi;
    }
}

class PersegiPanjang{
    public function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }

    public function hitungKeliling($panjang, $lebar) {
        return 2 * ($panjang + $lebar);
    }
}


class Uji {
    private $x;

    public function main() {
        $bujur = new BujurSangkar();

        $this->x = $bujur->hitungLuas(4);
        echo "\n Luas bujur sangkar (sisi 4): " . $this->x . "<br>";

        $this->x = $bujur->hitungKeliling(5);
        echo "\n Keliling bujur sangkar (sisi 5): " . $this->x . "<br>";

        $persegipanjang = new PersegiPanjang();

        $this->x = $persegipanjang->hitungLuas(6, 4);
        echo "\n Luas persegi panjang (6x4): " . $this->x . "<br>";

        $this->x = $persegipanjang->hitungKeliling(6, 4);
        echo "\n Keliling persegi panjang (6x4): " . $this->x . "<br>";
    }
}


$uji = new Uji();
$uji->main();
?>


