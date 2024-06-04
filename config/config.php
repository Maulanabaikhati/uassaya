<?php
$conn = mysqli_connect("localhost","root","","dbuas");

if( !$conn ){
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}
?>