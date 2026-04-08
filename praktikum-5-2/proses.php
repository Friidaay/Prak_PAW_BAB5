<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];

    if (empty($nama) || empty($nim) || empty($email)) {
        echo "Mohon isi semua kolom.";
    } else {
        $sanitizedNama = htmlspecialchars($nama);
        $sanitizedNim = htmlspecialchars($nim);
        $sanitizedEmail = htmlspecialchars($email);
 
        $data = "Nama: " . $sanitizedNama . ", NIM: " . $sanitizedNim . ", Email: " . $sanitizedEmail . "\n";

        $filename = "form_data.txt";
        $file = fopen($filename, "a");
 
        if ($file) {
            fwrite($file, $data);
            fclose($file);
            echo "Data berhasil disimpan.";
        } else {
            echo "Terjadi kesalahan saat menyimpan data ke file..";
        }
    }
}

?>