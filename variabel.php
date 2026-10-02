<?php
$nama = "Intan Diva Arianti";
echo "Nama : " . $nama . "<br>";

$kelas = "XII RPL 2";
echo "Kelas : " . $kelas . "<br>"
;
$sekolah = "SMK N 1 Pacitan";
echo "Sekolah : " . $sekolah . "<br>";

$umur = 18;
echo "Umur : " . $umur . "<br> <br>";

$mapel = array("KWU, PPKN, Sejarah, B.Jawa");
foreach ($mapel as $m) {
    echo "$m <br>";
}
?>