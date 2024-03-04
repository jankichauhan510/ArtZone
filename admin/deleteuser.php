<?php

include 'connection.php';
$id= $_GET['id'];

$deletequery = "DELETE FROM artist WHERE id = $id ";

$query = mysqli_query($dbc,$deletequery);

header('location:dashboard.php');

?>