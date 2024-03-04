<?php

include 'connection.php';
$id= $_GET['id'];

$deletequery = "DELETE FROM feedback WHERE id = $id ";

$query = mysqli_query($dbc,$deletequery);

header('location:viewfeedback.php');

?>