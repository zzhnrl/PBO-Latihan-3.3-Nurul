<?php
//input
$besar_pinjam = 1000000;
$besar_bunga = 10;
$lama_angsuran = 5;

//menghitung total pinjaman
$total_pinjam = $besar_pinjam + ($besar_pinjam * ($besar_bunga / 100));

//menghitung besar angsuran
$besar_angsuran = $total_pinjam / $lama_angsuran;

echo "Toko Pegadaian Syariah". "<br>";
echo "Jl Keadilan No. 16". "<br>";
echo "Telp. 72353459". "<br>". "<br>";

echo "===Program Penghitung Besaran Angsuran Hutang===". "<br>". "<br>";
echo "Besar Pinjaman : Rp. ". number_format ($besar_pinjam, 0, ',', '.'). "<br>";
echo "Besar Bunga : ". $besar_bunga . "%\n";
echo "Total Pinjaman : Rp. ". number_format ($total_pinjam, 0, ',', '.'). "<br>";
echo "Lama Angsuran : ". $lama_angsuran. "bulan\n";
echo "Besar angsuran per bulan : Rp. ". number_format ($besar_angsuran, 0, ',', '.'). "<br>";

?>