<?php


// $conn = mysqli_connect("localhost","root","","sakila");
$conn = mysqli_connect("localhost","202410103063","secret","uas202410103063");

if(isset($_POST['insertdata']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
    $rental_duration = $_POST['rental_duration'];
    $rental_rate = $_POST['rental_rate'];
    $release_year = $_POST['release_year'];
    $length = $_POST['length'];
    $replacement_cost = $_POST['replacement_cost'];

    $query = "INSERT INTO film (title,description,rating,release_year,rental_duration,rental_rate,length,replacement_cost) VALUES ('$title','$description','$rating','$release_year','$rental_duration','$rental_rate','$length','$replacement_cost')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("DATA SAVED"); </script>';
        sleep(2);
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("DATA NOT SAVED"); </script>';
    }
}






?>