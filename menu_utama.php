<?php
session_start();
$status = $_SESSION['status'];
$nama = $_SESSION['nama'];

echo "
    <link rel='stylesheet' href='menu.css'>
    <div>
    <h1>Main Menu</h1>
    <h2>$nama</h2>
";


if($status =="guru") {
    echo('
    <ul>
    <li><a href="home.html" target="kandungan">Home</a></li>
    <li><a href="menu_guru.html" target="menu">Guru</a></li>
    <li><a href="menu_pelajar.html" target="menu">Pelajar</a></li>
    <li><a href="menu_kelas.html" target="menu">Kelas</a></li>
    <li><a href="menu_soalan.html" target="menu">Soalan</a></li>
    <li><a href="laporan_pilihan.php" target="kandungan">Laporan</a></li>
    <li><a href="import.html" target="kandungan">Import</a></li>
    <li><a href="logout.php" target="_top">Keluar</a></li>
    </ul>
    </div> 
');

} else {
echo (' 
    <ul>
    <li><a href="home.html" target="kandungan">Home</a></li>
    <li><a href="jawab_mula.php" target="kandungan">Soalan</a></li>
    <li><a href="logout.php" target="_top">Keluar</a></li>  
    </ul>
    </div>
');
}

?>