<?php

class Dasar {
    private int $x;

    public function __construct(int $x) {
        $this->x = $x;
    }

    public function getX(): int {
        return $this->x;
    }

    public function tampilkanInformasi(): void {
        echo "Method dari class induk\n";
        echo "x=" . $this->x . "\n";
    }
}

class Turunan extends Dasar {
    private int $y;

    public function __construct(int $x, int $y) {
        parent::__construct($x);
        $this->y = $y;
    }

    
    public function tampilkanInformasi(): void {
        echo "Method dari class turunan\n";
        echo "nilai x=" . $this->getX() . "\n";
        echo "nilai y=" . $this->y . "\n";
    }
}


$a = new Dasar(3);
$a->tampilkanInformasi();

$b = new Turunan(4, 5);
$b->tampilkanInformasi();
