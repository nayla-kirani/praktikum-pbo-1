<?php
require_once "mahasiswa.php";

$mhs1 = new Mahasiswa(nama: "Nayla Zazki Kirani", nim: "H1H024007");
$mhs1->cetakInformasi();

$mhs2 = new Mahasiswa(nama: "Diva Syahita Mawarni", nim: "H1H024015", alamat: "Sokaraja");
$mhs2->cetakInformasi();

// Uji behaviour alamat
$mhs2->setAlamat("Kalimanah");  // mengubah alamat
echo "Alamat mahasiswa {$mhs2->getNama()} adalah: " . $mhs2->getAlamat() . "\n";
