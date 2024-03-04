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
  $InterestedArts = $res['InterestedArts'];
  $image = $res['image'];
  $phone = $res['phone'];
  $address = $res['address'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Profile</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/artistprofile.css">

  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Roboto", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">

            <div class="card ">
              <h1><?php echo $fname . " " . $lname ?></h1>
              <center>
                <?php if ($image == NULL) {
                  echo '<img src="https://technosmarter.com/assets/icon/user.png">';
                } else {
                  echo '<img src="images/' . $image . '" id="profile_pic" class="card-img img-fluid rounded-start"border-radius:50%;">';
                } ?>
              </center>

              <button type="button" class="Update"><a href="edit-profile.php" style="text-decoration:none ;">Update </a></button>
              <button type="button" class="Update"><a href="uploadpost.php" style="text-decoration:none ;">Upload Post</a></button>
              <button type="button" class="Update"><a href="logout.php" style="text-decoration:none ;">Logout</a></button>
            </div>
          </div>


          <div class="w3-container">

            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $InterestedArts; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
            <p><i class="fa fa-backward fa-fw w3-margin-right w3-large w3-text-teal"></i><a href="home.php" style="color:red;text-decoration:none;">BACK</a></p>
            <br>
          </div>

        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Post Your Artistry</h2>

        </div>
        <?php
        $sql = "SELECT * FROM post where email='$email' ORDER BY id DESC";
        $res = mysqli_query($dbc,  $sql);

        if (mysqli_num_rows($res) > 0) {

          while ($images = mysqli_fetch_assoc($res)) {   $id = $images['id']; ?>

            <div class="card text-white" style="width: 18rem; box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28); border-radius: 5px; border: 0.5px solid mediumpurple; margin:10px;">

              <div class="card-body">
                <!--<div class="alb">-->
                  <img src="uploads/<?= $images['post'] ?>">
                <!--</div>-->
                <p><a href="deletepost.php?id=<?php echo $images['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE" style="text-decoration: none;color:red;">
                    DELETE</a></p>
              </div>
            </div>
        <?php }
        } ?>
        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">ArtZone</a></p>
  </footer>

  <script>
    function openpopup() {
      let pop = document.querySelector('#popup').classList;

      pop.add("open-popup");
    }

    //profile uploading
    let profile_pic = document.getElementById("profile_pic");
    let input_file = document.getElementById("input_file");
    input_file.onchange = function() {
      profile_pic.src = URL.createObjectURL(input_file.files[0]);
    }
  </script>

</body>

</html>