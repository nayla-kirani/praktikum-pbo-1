<?php
// Abstract class SuatuMesin
abstract class SuatuMesin {
    private $hidup = false;
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function isHidup() {
        return $this->hidup;
    }

    public function setHidup($status) {
        $this->hidup = $status;
    }

    public function getNama() {
        return $this->nama;
    }

    abstract public function hidupkanMesin();
    abstract public function matikanMesin();
}

// Class MesinCuci
class MesinCuci extends SuatuMesin {

    public function hidupkanMesin() {
        if ($this->isHidup()) {
            echo $this->getNama() . " sudah hidup\n";
        } else {
            $this->setHidup(true);
            echo $this->getNama() . " dihidupkan\n";
        }
    }

    public function matikanMesin() {
        if ($this->isHidup()) {
            $this->setHidup(false);
            echo $this->getNama() . " dimatikan\n";
        } else {
            echo $this->getNama() . " dalam keadaan mati\n";
        }
    }
}

// Program utama
echo " ~ SIMULASI MESIN CUCI ~ \n";
$toshiba = new MesinCuci("Mesin Cuci Toshiba");
$toshiba->hidupkanMesin();
$toshiba->hidupkanMesin();
$toshiba->matikanMesin();
$toshiba->matikanMesin();
?>
