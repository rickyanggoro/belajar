<?php
class Mobil {
    public $warna;
    public $merek;
    public $kecepatan;

    public function tampilkanInfo() {
        return "Mobil ini berwarna " . $this->warna . ", mereknya " . $this->merek . ", dan kecepatannya " . $this->kecepatan . " km/jam.";
    }
}

$mobilSaya = new Mobil();
$mobilSaya->warna = "Merah";
$mobilSaya->merek = "Toyota";
$mobilSaya->kecepatan = 120;

echo $mobilSaya->tampilkanInfo();
?>
