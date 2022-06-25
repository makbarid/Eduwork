<?php
$a = 3;
$b = 4;
$c = 5;

echo "Luas Persegi ( s x s ) : <br>";
$l = $a * $a;
echo "$a x  $a = $l <br><br>";

echo "Luas Persegi Panjang ( p x l ) : <br>";
$l = $a * $b;
echo "$a x $b = $l <br><br>";

echo "Luas Segitiga ( 1/2 x a x t ) : <br>";
$l = 1 / 2 * $a * $b;
echo "1/2 * $a * $b = $l <br><br>";

echo "Luas Jajar Genjang ( a x t ) : <br>";
$l = $a * $b;
echo "$a * $b = $l <br><br>";

echo "Luas Lingkaran ( &pi; x r &circ; 2 ) : <br>";
$l = 3.14 * $a ** 2;
echo "3.14 x $a &circ; 2 = $l <br><br>";
echo "<hr>";



echo "Volume Kubus ( s x s x s ) : <br>";
$v = $a * $a * $a;
echo "$a x $a x $a= $v <br><br>";

echo "Volume Balok ( p x l x t ) : <br>";
$v = $a * $b * $c;
echo "$a x $b x $c = $v <br><br>";

echo "Volume Prisma Segitiga ( 1/2 x a x t ) : <br>";
$v = 1 / 2 * $a * $b;
echo "1/2 x $a x $b = $v <br><br>";

echo "Volume Tabung ( &pi; x r &circ; 2 x t ) : <br>";
$v = 3.14 * ($a ** 2) * $b;
echo "3.14 x r &circ; 2 x t = $v <br><br>";

echo "Volume Bola ( 4/3 x &pi; x r &circ; 3) : <br>";
$v = 4 / 3 * 3.14 * ($a ** 3);
echo "4/3 x 3.14 x r &circ; 3 = $v <br><br>";
