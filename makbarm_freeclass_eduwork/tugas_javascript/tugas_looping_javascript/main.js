// for
for (var angka = 1; angka <= 10; angka++) {
    document.write("Hello World " + angka + "x" + "<br/>");
}


// while
var i = 1;
while (i <= 10) {
    document.write("Taxi No. " + i + " Sedang beroperasi" + "<br/>")
    i++;
}


// do while
var j = 0;
do {
    j++
    document.write("Taxi No. " + j + " Sedang tidak beroperasi" + "<br/>")
} while (j <= 5);


// foreach
var kotak_pensil = ["pulpen", "pensil", "penghapus", "penggaris", "serutan", "spidol"];

kotak_pensil.forEach(function (item, index) {
    document.write(index + " " + item + "<br/>")
});