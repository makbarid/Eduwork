<?php
$nama = "Akbar";
$tb = 171;
$bb = 55;
$bmi = round($bb / ($tb / 100) ** 2, 2);

if ($bmi < 18.5) {
    echo "Halo $nama, Nilai BMI anda adalah $bmi, anda termasuk KURUS";
} else if ($bmi >= 18.5 and $bmi < 25) {
    echo "Halo $nama, Nilai BMI anda adalah $bmi, anda termasuk SEDANG";
} else {
    echo "Halo $nama, Nilai BMI anda adalah $bmi, anda termasuk GEMUK";
}
