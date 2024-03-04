<?php

include 'connection.php';
$id= $_GET['id'];

$deletequery = "DELETE FROM contactus WHERE id = $id ";

$query = mysqli_query($dbc,$deletequery);

header('location:viewcontactus.php');

?>