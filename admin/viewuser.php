<?php
include_once('connection.php');
$query = "select * from artist";
$result = mysqli_query($dbc, $query);
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
    <title>Admin panel- User Details</title>
    <style>
        table {
            padding-top: 20px;
            width: 600px;
            line-height: 40px;
            margin: auto;
            border-radius: 15px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php include('header.php');  ?>
        <?php include('sidebar.php');  ?>
        
        <div class="main">
            <table align="center">
                <tr>
                    <th colspan="4">
                        <h2>User Details</h2>
                    </th>
                </tr>
                <th> ID </th>
                <th> Username </th>
                <th> Email</th>
                <th> FName</th>
                <th> LName</th>
                <th> Phone</th>
                <th> Address</th>
                <th> Art</th>
                <th> Delete </th>
                </tr>

                <?php while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['username']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['fname']; ?></td>
                        <td><?php echo $rows['lname']; ?></td>
                        <td><?php echo $rows['phone']; ?></td>
                        <td><?php echo $rows['address']; ?></td>
                        <td><?php echo $rows['InterestedArts']; ?></td>
                        <td style="text-align: center;"><a href="deleteuser.php?id=<?php echo $rows['id']; ?>" style="text-decoration: none;color:red;"><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                <?php
                }
                ?>

            </table>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>

</body>

</html>