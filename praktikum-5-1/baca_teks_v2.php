<?php

$file = fopen("data.txt", "r");
if ($file) {
    while(($baris = fgets($file)) !== false){
        echo $baris . "<br>";
    }
    fclose($file);
} else {
    echo "File tidak bisa dibuka.";
}

?>