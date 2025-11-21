<?php

interface Komputer {
    public function konekInternet(bool $konek);
}

interface KontrolTv {
    public function hidupkan(bool $hidup);
    public function pindahChannel(int $channel);
    public function keraskanVolume(int $tambah);
    public function pelankanVolume(int $kurangi);
}

class Televisi implements KontrolTv, Komputer {

    private string $merek;
    private bool $hidup = false;

    private array $saluran = ["RCTI", "SCTV", "INDOSIAR", "TPI", "ANTV", "TRANSTV", "TRANS7"];
    private int $volume = 0;

    public function __construct(string $merek) {
        $this->merek = $merek;
    }

    public function konekInternet(bool $konek) {
        if ($konek) {
            echo "TV terkoneksi Internet\n";
        } else {
            echo "TV tidak terkoneksi Internet\n";
        }
    }

    public function hidupkan(bool $hidup) {
        $this->hidup = $hidup;

        if ($hidup) {
            echo "Televisi dihidupkan\n";
        } else {
            echo "Televisi dimatikan\n";
        }
    }

    public function keraskanVolume(int $tambah) {
        if ($this->hidup) {
            $this->volume += $tambah;
            echo "volume menjadi {$this->volume}\n";
        } else {
            echo "Televisi dalam keadaan mati\n";
        }
    }

    public function pelankanVolume(int $kurangi) {
        if ($this->hidup) {
            $this->volume -= $kurangi;
            echo "volume di set ke {$this->volume}\n";
        } else {
            echo "Televisi dalam keadaan mati\n";
        }
    }

    public function pindahChannel(int $channel) {
        if ($this->hidup) {
            echo "TV menjadi " . $this->saluran[$channel] . "\n";
        } else {
            echo "Televisi dalam keadaan mati\n";
        }
    }
}

//MAIN PROGRAM 

$GoogleTv = new Televisi("Google");

$GoogleTv->hidupkan(true);
$GoogleTv->konekInternet(true);
$GoogleTv->keraskanVolume(10);
$GoogleTv->hidupkan(false);

?>
