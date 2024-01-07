<?php

//asean 1
$asean = array(
    "Indonesia",
    "Singapura",
    "Malaysia",
    "Brunei",
    "Thailand"
);

// Tampilkan daftar negara ASEAN awal
echo "<h1>Daftar Negara ASEAN :</h1>";
echo "<ul>";
foreach ($asean as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";

// Tambahkan 3 elemen baru ke array menggunakan []
//disini kita menambahkan 3 negara baru
$asean[] = "Laos";
$asean[] = "Filipina";
$asean[] = "Myanmar";

// Tampilkan daftar negara ASEAN setelah penambahan dengan []
echo "<h1>Daftar Negara ASEAN Terbaru : </h1>";
echo "<ul>";
foreach ($asean as $country) {
    echo "<li>$country</li>";
}
echo "</ul>";

// Tambahkan 3 elemen baru ke array menggunakan array_push
array_push($asean, "Cambodia", "Vietnam", "Timor Leste");

?>