<?php
// $db = mysqli_connect("localhost","root","","sakila");
$db = mysqli_connect("localhost","202410103063","secret","uas202410103063");

if ($db->connect_error) {
    die("Koneksi Database Gagal");
}

$begin = isset($_GET['begin']) ? $_GET['begin'] : 0;
$query = "SELECT * FROM film ORDER BY title LIMIT {$begin} ,15 " ;
$sql = $db->query($query);
$data = [];
while ($row = $sql->fetch_assoc()) {
    if (file_exists("assets/{$row['film_id']}.jpg")) {
        $row['thumbnail'] = "assets/{$row['film_id']}.jpg";
    } else {
        $row['thumbnail'] = "assets/no_image.jpg";
    }
    array_push($data, $row);
}
header("Content-Type: application/json");
echo json_encode($data);
