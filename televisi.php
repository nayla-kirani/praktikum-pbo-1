<?php
class Televisi {
    private $merk;
    private $harga;
    private $channel;
    private $status; // true = hidup, false = mati

    // Constructor
    public function __construct($merk, $harga) {
        $this->merk = $merk;
        $this->harga = $harga;
        $this->status = false; // default mati
    }

    public function informasiTv() {
        echo "Televisi {$this->merk} harga {$this->harga} \n";
    }

    public function hidupkanTv() {
        $this->status = true;
        echo "Televisi hidup \n";
    }

    public function matikanTv() {
        $this->status = false;
        echo "\nTelevisi mati";
    }

    public function setChannel($channel) {
        if ($this->status) {
            $this->channel = $channel;
        } else {
            echo "Televisi belum dinyalakan! \n";
        }
    }

    public function getChannel() {
        return $this->channel;
    }
}

