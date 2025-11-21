?>
<?php
require_once "Televisi.php";

$tvFlat = new Televisi("Sharp", "3Juta");
$tvFlat->informasiTv();
$tvFlat->hidupkanTv();
$tvFlat->setChannel(1);
echo "Televisi diset pada channel: " . $tvFlat->getChannel() ;
$tvFlat->matikanTv();
?>