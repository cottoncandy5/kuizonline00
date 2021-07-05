<?php
include("sambungan.php");

$idpelajar = $_POST["idpelajar"];
$namapelajar = $_POST["namapelajar"];
$idkelas = $_POST["idkelas"];
$password = $_POST["password"];

$sql = "insert into pelajar values('$idpelajar','$namapelajar', '$idkelas', '$password')";
$result = mysqli_query($sambungan, $sql);

if($result==true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";
?>