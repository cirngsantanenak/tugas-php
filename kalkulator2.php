<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Nilai Siswa</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<h2>Input Nilai Siswa</h2>

<form action="" method="post">

    Nama:
    <input type="text" name="nama">
    <br><br>

    Matematika:
    <input type="text" name="mtk">
    <br><br>

    Bahasa Indonesia:
    <input type="text" name="indo">
    <br><br>

    Produktif:
    <input type="text" name="produktif">
    <br><br>

    <button type="submit">Kirim</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $mtk = $_POST["mtk"];
    $indo = $_POST["indo"];
    $produktif = $_POST["produktif"];

    if ($nama == "" || $mtk == "" || $indo == "" || $produktif == "") {

        echo "<p class='error'>Input tidak boleh kosong!</p>";

    } elseif (
        !is_numeric($mtk) ||
        !is_numeric($indo) ||
        !is_numeric($produktif)
    ) {

        echo "<p class='error'>Nilai Harus Berupa Angka!</p>";

    } elseif (
        $mtk < 0 || $mtk > 100 ||
        $indo < 0 || $indo > 100 ||
        $produktif < 0 || $produktif > 100
    ) {

         echo "<p class='error'>Nilai Harus di antara 0 sampai 100!</p>";

    } else {

        $ratarata = ($mtk + $indo + $produktif) / 3;

        if ($ratarata >= 85) {
            $predikat = "A";
        } elseif ($ratarata >= 75) {
            $predikat = "B";
        } elseif ($ratarata >= 65) {
            $predikat = "C";
        } elseif ($ratarata >= 50) {
            $predikat = "D";
        } else {
            $predikat = "E";
        }
        if ($ratarata >= 75) {
            $status = "Lulus";
        } else {
            $status = "Remedial";
        }

        echo "<div class='hasil'>";
        echo "<h3>Hasil</h3>";
        echo "Nama: $nama <br>";
        echo "Rata-rata: $ratarata <br>";
        echo "Predikat: $predikat <br>";
        echo "Status : $status";
        echo "</div>";
    }
}

?>
</body>
</html>