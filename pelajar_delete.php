<?php
include("sambungan.php");

$idpelajar = $_POST["idpelajar"];

$sql = "delete from pelajar where idpelajar = '$idpelajar'";
$result = mysqli_query($sambungan,$sql);
if ($result==true)
    echo "berjaya padam";
else
    echo "tidak berjaya padam";
?>