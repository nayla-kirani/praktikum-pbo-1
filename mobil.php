<?php
class Mobil {
    private $merek;
    private $roda;
    private $kursi;
    private $transmisi;

    public function __construct($merek, $roda, $kursi, $transmisi) {
        $this->merek = $merek;
        $this->roda = $roda;
        $this->kursi = $kursi;
        $this->transmisi = $transmisi;
    }

    public function getMerek() {
        return $this->merek;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function getRoda() {
        return $this->roda;
    }

    public function setRoda($roda) {
        $this->roda = $roda;
    }

    public function getKursi() {
        return $this->kursi;
    }

    public function setKursi($kursi) {
        $this->kursi = $kursi;
    }

    public function getTransmisi() {
        return $this->transmisi;
    }

    public function setTransmisi($transmisi) {
        $this->transmisi = $transmisi;
    }
}
?>
