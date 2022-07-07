
<!-- include database -->

<?php

  include 'connection.php';
 
  // sorry need to get id 

  $id = $_POST['delete_id'];
  $query_run = mysqli_query($db,"DELETE FROM food WHERE id_food='$id'");

 ?>