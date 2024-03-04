<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Admin panel</title>
</head>

<body>
    <div class="container">
        <?php include('header.php');  ?>
        <?php include('sidebar.php');  ?>
        <div class="main">
            <div class="cards">
                <div class="card">
                    <div class="card-content"><?php
                                                $admin_query = "select * from admin";
                                                $admin_query_run = mysqli_query($dbc, $admin_query);
                                                if ($total_admin = mysqli_num_rows($admin_query_run)) {
                                                ?>
                            <div class="number"><?php echo $total_admin;
                                                } else echo "No Data " ?></div>
                            <div class="card-name"><a href="viewadmin.php" style="text-decoration: none; color:gray;">Admin</a></div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-regular fa-circle-user"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <?php
                        $artist_query = "select * from artist";
                        $artist_query_run = mysqli_query($dbc, $artist_query);
                        if ($total_user = mysqli_num_rows($artist_query_run)) {
                        ?>
                            <div class="number"><?php echo $total_user;
                                            } else {
                                                echo "No Data";
                                            } ?></div>
                            <div class="card-name"><a href="viewuser.php" style="text-decoration: none; color:gray;">User</a></div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <?php

                        $post_query = "select * from post";
                        $post_query_run = mysqli_query($dbc, $post_query);
                        if ($total_post = mysqli_num_rows($post_query_run)) {
                        ?>
                            <div class="number"><?php echo $total_post;
                                            } else {
                                                echo "No Data";
                                            } ?></div>
                            <div class="card-name"><a href="viewpost.php" style="text-decoration: none; color:gray;">Post</a></div>
                    </div>
                    <div class="icon-box">
                        <i class="fa-solid fa-copy"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <?php

                        $post_query = "select * from contactus";
                        $post_query_run = mysqli_query($dbc, $post_query);
                        if ($total_post = mysqli_num_rows($post_query_run)) {
                        ?>
                            <div class="number"><?php echo $total_post;
                                            } else {
                                                echo "No Data";
                                            } ?></div>
                            <div class="card-name"><a href="viewcontactus.php" style="text-decoration: none; color:gray;">Contact Us</a></div>
                    </div>
                    <div class="icon-box">
                    <i class="fa-regular fa-file-lines"></i>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <?php

                        $post_query = "select * from feedback";
                        $post_query_run = mysqli_query($dbc, $post_query);
                        if ($total_post = mysqli_num_rows($post_query_run)) {
                        ?>
                            <div class="number"><?php echo $total_post;
                                            } else {
                                                echo "No Data";
                                            } ?></div>
                            <div class="card-name"><a href="viewfeedback.php" style="text-decoration: none; color:gray;">Feedback</a></div>
                    </div>
                    <div class="icon-box">
                    <i class="fa-solid fa-message"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

</body>

</html>