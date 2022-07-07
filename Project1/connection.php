<?php
$db = mysqli_connect("localhost","root","","tugas_akhir");
// $db = mysqli_connect("localhost","202410103063","secret","uas202410103063");

if ($db->connect_error) {
    die("Koneksi Database Gagal");
}


