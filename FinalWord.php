<?php
class FinalWord {
    
    const PHI = 3.14;

    
    public function kelilingLingkaran($jari) {
        $keliling = 2 * self::PHI * $jari;
        return $keliling;
    }

    
    public function luasLingkaran($jari) {
        $luas = self::PHI * $jari * $jari;
        return $luas;
    }
}


class Uji {
    public static function main() {
        $objFinal = new FinalWord();
        $objFinal->phi = 3.17;
        echo "\n Keliling = " . $objFinal->kelilingLingkaran(2) . "<br>";
        echo "\n Luas = " . $objFinal->luasLingkaran(3) . "<br>";
    }
}


Uji::main();
?>
