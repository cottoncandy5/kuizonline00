<?php
$host= 'localhost' ;
$user = 'root' ;
$password = '' ;
$database= 'kuizonline' ;

$sambungan = mysqli_connect( $host,$user,$password,$database )
or die ('sambungan gagal') ;
    echo 'sambungan berjaya' ;
?>