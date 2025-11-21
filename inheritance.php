<?php
class Sepeda {
    public $pedal;
    public $gear;
    public $kecepatan;
    private $standar;

    public function __construct($pedal = 0, $gear = 0, $kecepatan = 0) {
        $this->pedal = $pedal;
        $this->gear = $gear;
        $this->kecepatan = $kecepatan;
    }

    public function remSepeda($nilaiPengereman) {
        $this->kecepatan = $this->kecepatan - $nilaiPengereman;
    }

    public function tambahKecepatan($nilaiTambah) {
        $this->kecepatan = $this->kecepatan + $nilaiTambah;
    }
}

class SepedaGunung extends Sepeda {
    private $Shockbreaker;
    private $lampu;
    private $tempatMinum;

    public function getShockbreaker() {
        return $this->Shockbreaker;
    }

    public function getLampu() {
        return $this->lampu;
    }

    public function getTempatMinum() {
        return $this->tempatMinum;
    }

    public function setShockbreaker($Shockbreaker) {
        $this->Shockbreaker = $Shockbreaker;
    }

    public function setLampu($lampu) {
        $this->lampu = $lampu;
    }

    public function setTempatMinum($tempatMinum) {
        $this->tempatMinum = $tempatMinum;
    }
}

// Main program
$Poligon = new SepedaGunung();
$Poligon->gear = 1;
$Poligon->pedal = 2;
$Poligon->kecepatan = 40;
$Poligon->setLampu(1);
$Poligon->setShockbreaker(2);
$Poligon->setTempatMinum(1);

// Output ke bawah
echo "Data Sepeda Gunung:\n";
echo "Jumlah Gear     : " . $Poligon->gear . "\n";
echo "Jumlah Pedal    : " . $Poligon->pedal . "\n";
echo "Kecepatan       : " . $Poligon->kecepatan . "\n";
echo "Lampu           : " . $Poligon->getLampu() . "\n";
echo "Shockbreaker    : " . $Poligon->getShockbreaker() . "\n";
echo "Tempat Minum    : " . $Poligon->getTempatMinum() . "\n";
?>