<?php

include 'connection.php';
$id= $_GET['id'];

$deletequery = "DELETE FROM admin WHERE id = $id ";

$query = mysqli_query($dbc,$deletequery);

header('location:viewadmin.php');

?>