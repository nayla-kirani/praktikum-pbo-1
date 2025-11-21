<?php
interface KontrolTv {
    public function hidupkan(bool $hidup): void;
    public function pindahChannel(int $channel): void;
    public function keraskanVolume(int $tambah): void;
    public function pelankanVolume(int $kurangi): void;
}

class Televisi implements KontrolTv {
    private string $merek;
    private bool $hidup = false;
    private array $saluran = ["RCTI","SCTV","INDOSIAR","TPI","ANTV,TRANSTV","TRANS7"];
    private int $volume = 0;

    public function __construct(string $merek) {
        $this->merek = $merek;
    }

    public function hidupkan(bool $hidup): void {
        if ($hidup) {
            $this->hidup = true;
            echo "Televisi dihidupkan\n";
        } else {
            $this->hidup = false;
            echo "Televisi dimatikan\n";
        }
    }

    public function keraskanVolume(int $tambah): void {
        if ($this->hidup) {
            $this->volume = $this->volume + $tambah;
            echo "volume menjadi " . $this->volume . "\n";
        } else {
            echo "Televisi dalam keadaan mati\n";
        }
    }

    public function pelankanVolume(int $kurangi): void {
        if ($this->hidup) {
            $this->volume = $this->volume - $kurangi;
            echo "volume di set ke " . $this->volume . "\n";
        } else {
            echo "Televisi dalam keadaan mati\n";
        }
    }

    public function pindahChannel(int $channel): void {
        if ($this->hidup) {
            if (isset($this->saluran[$channel])) {
                echo "TV menjadi " . $this->saluran[$channel] . "\n";
            } else {
                echo "Channel tidak tersedia\n";
            }
        } else {
            echo "Televisi dalam keadaan mati\n";
        }
    }
}

$tvku = new Televisi("SHARP");
$tvku->hidupkan(true);
$tvku->keraskanVolume(10);
$tvku->pelankanVolume(3);
$tvku->pindahChannel(5);
$tvku->hidupkan(false);
