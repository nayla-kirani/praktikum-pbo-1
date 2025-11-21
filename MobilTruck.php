<?php
require_once 'Mobil.php';

class MobilTruck extends Mobil {
    private $bakPasir;
    private $gandengan;

    public function __construct($merek, $roda, $kursi, $transmisi, $bakPasir, $gandengan) {
        parent::__construct($merek, $roda, $kursi, $transmisi);
        $this->bakPasir = $bakPasir;
        $this->gandengan = $gandengan;
    }

    public function tampilkanTruck() {
        echo "Mobil dengan merk: " . $this->getMerek() . PHP_EOL;
        echo "Mempunyai roda: " . $this->getRoda() . PHP_EOL;
        echo "Transmisi: " . $this->getTransmisi() . PHP_EOL;
        echo "Dilengkapi bak pasir: " . $this->bakPasir . PHP_EOL;
        echo "Dilengkapi gandengan: " . $this->gandengan . PHP_EOL;
    }
}
?>
