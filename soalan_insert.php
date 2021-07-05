<?php
include("sambungan.php");

$idsoalan = $_POST["idsoalan"];
$namasoalan = $_POST["namasoalan"];
$pilihana = $_POST["pilihana"];
$pilihanb = $_POST["pilihanb"];
$pilihanc = $_POST["pilihanc"];
$jawapan = $_POST["jawapan"];
$idguru = $_POST["idguru"];

$sql = "insert into soalan values(
'$idsoalan',
'$namasoalan',
'$pilihana',
'$pilihanb',
'$pilihanc',
'$jawapan',
'$idguru') ";

$result = mysqli_query($sambungan, $sql);

if($result==true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";
?>