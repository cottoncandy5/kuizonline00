<?php
include("sambungan.php");
?>
<link rel="stylesheet" href="senarai.css">
<table>
    <caption>SENARAI NAMA PELAJAR</caption>
    <tr>
        <th>ID</th>
        <th>Nama Pelajar</th>
        <th>ID Kelas</th>
        <th>Password</th>
    </tr>

    <?php
    $sql = "select * from pelajar";
    $result = mysqli_query($sambungan, $sql);
    while ($pelajar = mysqli_fetch_array($result)) {
        echo '<tr><td>'.$pelajar["idpelajar"].'</td>
        <td>'.$pelajar["namapelajar"].'</td>
        <td>'.$pelajar["idkelas"].'</td>
        <td>'.$pelajar["password"].'</td>
        </tr>';
    }
    ?>
</table>