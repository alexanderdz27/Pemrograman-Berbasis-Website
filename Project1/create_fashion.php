<?php

require_once("connection.php");

if(isset($_POST['insertdata']))
{
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO fashion (`judul`, `deskripsi`, `kategori`) VALUES ('$judul','$deskripsi','$kategori')";
    $query_run = mysqli_query($db, $query);

    if($query_run)
    {
        echo '<script> alert("data has been saved"); </script>';
        header('Location: fashion.php');
    }
    else
    {
        echo '<script> alert("data not saved"); </script>';
    }
}

?>