<?php
include("sambungan.php");

$idguru = $_POST["idguru"];
$namaguru = $_POST["namaguru"];
$password = $_POST["password"];

$sql = "insert into guru values('$idguru','$namaguru', '$password')";
$result = mysqli_query($sambungan, $sql);

if($result==true)
    echo "berjaya tambah";
else
    echo "tidak berjaya tambah";
?>