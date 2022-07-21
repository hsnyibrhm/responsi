<?php 

echo "<head><title>rental mobil</title></head>";
$fp = fopen("rental.txt", "r");
echo "<p align='center'><a href='index.html'> isi data pinjaman </a></p>";
echo "<table border='2' align='center'>";
echo "<tr><td>Nama </td><td> alamat </td><td> jenis</td><td> no hp </td><td> waktu </td></tr>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>$pisah[0] </td><td> $pisah[1] </td><td> $pisah[2] </td><td> $pisah[3] </td><td> $pisah[4] </td></tr>";
}

echo "</table>";


?>
