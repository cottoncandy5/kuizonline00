<?php
include ('sambungan.php');
$namajadual = $_POST['namatable'];
$namafail = $_FILES['namafail']['name'];

$fail = fopen($namafail, "r");

while (!feof($fail)) {
    $medan = explode(",", fgets($fail));

    if ($namajadual === "pelajar") {
        $idpelajar = $medan[0];
        $namapelajar = $medan[1];
        $idkelas = $medan[2];
        $password = $medan[3];
        $sql = "insert into pelajar values(
            '$idpelajar',
            '$namapelajar',
            '$idkelas',
            '$password')";
        if (mysqli_query($sambungan, $sql)) {
            $berjaya = true;
        } else {
            $berjaya = false;
        }
    }

    if ($namajadual === "soalan") {
        $idsoalan = $medan[0];
        $namasoalan = $medan[1];
        $pilihana = $medan[2];
        $pilihanb = $medan[3];
        $pilihanc = $medan[4];
        $jawapan = $medan[5];
        $idguru = $medan[6];
        $sql = "insert into soalan values(
        '$idsoalan',
        '$namasoalan',
        '$pilihana',
		'$pilihanb',
        '$pilihanc',
        '$jawapan',
        '$idguru')";

        if (mysqli_query($sambungan, $sql)) {
            $berjaya = true;
        } else {
            $berjaya = false;
        }

    }
}
if ($berjaya == true) {
    echo "<script>alert('Rekod berjaya di import');</script>";
} else {
    echo "<script>alert('Rekod tidak berjaya di import');</script>";
}
mysqli_close($sambungan);
?>