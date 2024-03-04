<?php require_once("connection.php");
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
<html>

<head>
  <title> My Account</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-image: url('back.jpg'); height:100%; width:100%;">
  <div class="container" style="margin-top: 25px;
    padding: 30px;
    box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28);
    border-radius: 5px;">
    <div class="row">
      <div class="col-sm-3">

      </div>
      <div class="col-sm-6">
        <div class="login_form">

          <div class="row">
            <div class="col"></div>
            <div class="col-6">
              <?php if (isset($_GET['profile_updated'])) { ?>
                <div class="successmsg">Profile saved ..</div>
              <?php } ?>
              <?php if (isset($_GET['password_updated'])) { ?>
                <div class="successmsg">Password has been changed...</div>
              <?php } ?>
              <center>
                <?php if ($image == NULL) {
                  echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                } else {
                  echo '<img src="images/' . $image . '" style="height:80px;width:auto;border-radius:50%;">';
                } ?>

                <p> Welcome! <span style="color:#33CC00"><?php echo $fname . " " . $lname; ?></span> </p>
              </center>
            </div>
            <div class="col">
              <p><a href="logout.php">
                <span style="color:red;">Logout</span> </a></p>
            </div>
          </div>

          <table class="table">
            <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
            </tr>
            <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
            </tr>
            <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
            </tr>
            <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
            </tr>
          </table>
          <div class="row">
            <div class="col-sm-4">
            <a href="home.php"><button type="button" class="btn btn-primary">Homepage</button></a>
            </div>
            <div class="col-sm-4">
              
            </div>
            <div class="col-sm-4">
              <a href="change-password.php"><button type="button" class="btn btn-warning">Change Password</button></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
        </div>
      </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>