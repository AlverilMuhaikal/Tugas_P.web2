<!DOCTYPE html>
<html lang="en">

<?php
$tulisan = "Hello Word! Here I Come!";
$kelas = "ganti-style";

echo ganti_style ($tulisan, $kelas);

function ganti_style($text, $kelas) {
    return "<span class= '$kelas'> $text </span>";
}
?>

<style>
    body{
        color: #1A0547;
        font-weight : bolder;
        font-size: 28px;
        font-style: italic;
    }
    </style>

    </html>