<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    return PHI * $r * $r;
}
define("PHI", 3.14);
$r = 10;
echo "Jari-jari = $r cm. <br>\n";
$luas = hitungLuasLingkaran($r);
echo "Luas lingkaran = $luas cm<sup>2</sup>";
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    return 2 * PHII * $r;
}
define("PHII", 3.14);
$r = 20;
echo "Jari-jari = $r cm. <br>\n";
$keliling = hitungKelilingLingkaran($r);
echo "Keliling lingkaran = $keliling cm";
echo "<hr>";
