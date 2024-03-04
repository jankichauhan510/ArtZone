<?php
require_once("connection.php");
if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}
$email = $_SESSION["login_email"];
$findresult = mysqli_query($dbc, "SELECT * FROM artist WHERE email= '$email'");
if ($res = mysqli_fetch_array($findresult)) {
    $username = $res['username'];
    $fname = $res['fname'];
    $lname = $res['lname'];
    $email = $res['email'];
    $image = $res['image'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>ART ZONE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/h1.css">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="user" style="padding:20px;">
        <h1><a href="dashboard.php" style="color: red;text-decoration:none;">BACK</a></h1>
    </div>
    <div class="container">
        <?php
        //require_once('connection.php');

        $query2 = "select * from post";

        $query2_run = mysqli_query($dbc, $query2);
        $check_post = mysqli_num_rows($query2_run) > 0;


        if ($check_post) {

            while ($row = mysqli_fetch_assoc($query2_run)) {
                $image = $row['post'];

        ?>
                <div class="card  " style="background-color: #299B63;">
                    <div class="imgbx">
                        <img src="../Artist/uploads/<?php echo $row['post']; ?>" alt="image"><br><br>
                        <p style="font-size: 12px;">By:<?php echo $row['email']; ?></p>
                        <p><a href="deletepost.php?id=<?php echo $row['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE" style="text-decoration: none;color:red; text-align:center;">
                                DELETE</a></p>
                    </div>
                </div>
                <div class="popup" id="popup">
                    <h1>hello</h1>
                    <button type="submit" onclick="return closepopup()">BACK</button>
                </div>
        <?php

            }
        } else {
            echo "No Record Found";
        }
        ?>

        <script>
            $(document).ready(function() {
                $('#icon').click(function() {

                    $('ul').toggleClass('show');
                });
            });
            //popup
            function openpopup() {
                let pop = document.querySelector('#popup').classList;

                pop.add("open-popup");
            }

            function closepopup() {
                let pop = document.querySelector('#popup').classList;

                pop.remove("open-popup");
            }
        </script>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>