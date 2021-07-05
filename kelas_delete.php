<?php
include("sambungan.php");

$idkelas = $_POST["idkelas"];

$sql = "delete from kelas where idkelas='$idkelas'";
$result = mysqli_query($sambungan, $sql);
if ($result==true)
    echo "berjaya padam";
else
    echo "tidak berjaya padam";
?>