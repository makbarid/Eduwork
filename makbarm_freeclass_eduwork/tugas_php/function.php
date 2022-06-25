
<?= "Luas Bangun Datar <br><br>" ?>

<?php

function luasPersegi ($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    echo "$angka1 + $angka2 = $hasil <br>";
    
}
    luasPersegi(10,10);
    
    ?>

<?php

function luasPersegiPanjang ($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    echo "$angka1 + $angka2 = $hasil <br>";
        
}
luasPersegiPanjang(20,20);

?>

<?php

function luasSegitiga ($angka1, $angka2) {
    $hasil = 1/2 * ($angka1 + $angka2);
        echo "1/2 * ($angka1 + $angka2) = $hasil <br>";
        
    }
    luasSegitiga(10,20);
    
    ?>

<?php

    function luasJajarGenjang ($angka1, $angka2) {
        $hasil = $angka1 + $angka2;
        echo "$angka1 + $angka2 = $hasil <br>";
        
    }
    luasSegitiga(10,20);
    
?>


<?php

function luasLingkaran ($angka1) {
    $hasil = 3.14 * $angka1**2;
    echo "3.14 * $angka1^2 = $hasil <br>";
    
}
luasLingkaran(15);

?>

<?= "<br> Luas Bangun Ruang <br><br>" ?>

<?php

    function volumeKubus ($angka1) {
        $hasil = $angka1 * $angka1 * $angka1;
        echo "$angka1 * $angka1 * $angka1 = $hasil <br>";

    }
    volumeKubus(5);

?>

<?php

    function volumeBalok ($angka1, $angka2, $angka3) {
        $hasil = $angka1 * $angka2 * $angka3;
        echo "$angka1 * $angka2 * $angka3 = $hasil <br>";

    }
    volumeBalok(5, 6 ,7);

?>

<?php

    function volumePrismaSegitiga ($angka1, $angka2) {
        $hasil = 1/2 * ($angka1 * $angka2);
        echo "1/2 * ($angka1 * $angka2) = $hasil <br>";

    }
    volumePrismaSegitiga(7, 10);

?>

<?php

    function volumeTabung ($angka1, $angka2) {
        $hasil = 3.14 * ($angka1**2 * $angka2);
        echo "3.14 * ($angka1**2 * $angka2) = $hasil <br>";

    }
    volumeTabung(7, 10);

?>

<?php

    function volumeBola ($angka1) {
        $hasil = 4/3 * 3.14 * $angka1**3;
        echo "4/3 * 3.14 * $angka1**3 = $hasil <br>";

    }
    volumeBola(8);

?>

