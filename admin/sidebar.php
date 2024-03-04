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
        <?php include('header.php');?>
        <div class="sidebar">
            <ul>
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-th-large"></i>
                        <div>
                            <h3>Dashboard</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="viewadmin.php">
                        <i class="fa-regular fa-circle-user"></i>
                        <div>
                            <h3> View Admin</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="viewuser.php">
                        <i class="fa-solid fa-user"></i>
                        <div>
                            <h3> View User</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="viewpost.php">
                        <i class="fa-solid fa-copy"></i>
                        <div>
                            <h3> View Post</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="addadmin.php">
                    <i class="fa-solid fa-user-plus"></i>
                        <div>
                            <h3>Add Admin</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="viewcontactus.php">
                    <i class="fa-regular fa-file-lines"></i>
                        <div>
                            <h3>View Contact Us</h3>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="viewfeedback.php">
                    <i class="fa-solid fa-message"></i>
                        <div>
                            <h3>View Feedback</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>