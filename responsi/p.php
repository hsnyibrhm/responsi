<?php

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$alamat = $_POST['alamat'];
$no = $_POST['no'];
$waktu = $_POST['waktu'];


echo "<head> <div style='text-align:center'><title> buku rental</title></head>";
$fp = fopen("rental.txt","a+");
fputs($fp,"$nama|$alamat|$jenis|$no|$waktu\n");
fclose($fp);
echo "terimakasih menyewa mobil di sini <br>";
echo "<a href=index.html>isi data</a><br>";
echo "<a href=L.php> lihat penyewa</a><br> </div>";

?>