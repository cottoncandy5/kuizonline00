<?php
include("sambungan.php");

$idguru = $_POST["idguru"];

$sql = "delete from guru where idguru='$idguru'";
$result = mysqli_query($sambungan, $sql);
if ($result==true)
    echo "berjaya padam";
else
    echo "tidak berjaya padam";
?>