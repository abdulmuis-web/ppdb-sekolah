<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_pendaftaran";

$koneksi = mysqli_connect($host,$user,$pass,$dbname);

if (!$koneksi) {
	die("data tidak terkoneksi :". mysqli_connect_error());
}
?>