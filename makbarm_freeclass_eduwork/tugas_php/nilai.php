<?php
$angka = 100;

switch ($angka) {
    case $angka >= 0 and $angka < 70:
        echo "Nilai D";
        break;
    case $angka >= 70 and $angka < 80:
        echo "Nilai B";
        break;
    case $angka >= 80 and $angka < 90:
        echo "Nilai C";
        break;
    case $angka >= 90 and $angka <= 100:
        echo "Nilai A";
        break;
    default:
        echo "Inputan Salah";
        break;
}
