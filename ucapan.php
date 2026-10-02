<?php
date_default_timezone_set('Asia/Jakarta');
echo date ("Y-m-d H:i:s") . "<br>";

$i = date("H");

if ($i < "10") {
    echo "Selamat Pagi!!";
} elseif ($i < "14") {
    echo "Selamat Siang!!";
} elseif ($i < "18") {
    echo "Selamat Sore!!";
} else {
    echo "Selamat Malam!!";
}
?>