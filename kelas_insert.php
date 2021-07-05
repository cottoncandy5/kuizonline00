<?php
include("sambungan.php");

$idkelas = $_POST["idkelas"];
$namakelas = $_POST["namakelas"];
    
    $sql = "insert into kelas values('$idkelas','$namakelas')";
    $result = mysqli_query( $sambungan,$sql );
    if ($result==true)
    echo "berjaya tambah";
    else
    echo "tidak berjaya tambah";
    ?>