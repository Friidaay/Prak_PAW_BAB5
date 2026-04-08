<?php

$data = "\nData Tambahan ==> Nama: Reyhan, NIM: 245150307111067, Prodi: Teknik Komputer";
$file = fopen("catatan.txt", "a");
if ($file) {
    fwrite($file, $data);
    fclose($file);
    echo "Data berhasil ditambahkan ke catatan.txt";
} else {
    echo "File tidak bisa dibuka.";
}

?>