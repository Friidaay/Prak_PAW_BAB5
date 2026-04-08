<?php

$data = "Nama: Aldi, NIM: 245150201111011, Prodi: Teknik Informatika";
file_put_contents("catatan.txt", $data);

echo "File berhasil dibuat dan ditulis.";

?>