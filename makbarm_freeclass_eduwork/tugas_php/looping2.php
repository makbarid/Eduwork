<?php
$j = 10;

echo "<table border 1px cellspacing= 0 cellpadding= 5px>";
echo "<thead>";
echo "<tr bgcolor = 'lightblue'>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Kelas</th>";
"</tr>";
"</thead>";
echo "<tbody>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $bg = "#fff";
    } else {
        $bg = "#ddd";
    }
    echo "<tr bgcolor = $bg >";
    echo "<td><center>$i</td>";
    echo "<td><center>Siswa ke $i</td>";
    echo "<td><center>Kelas " . $j-- . "</td>";
    "</tr>";
}
"</tr>";
"</tbody>";
"</table>";
