<?php
require_once("connection.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Admin</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url('back.jpg'); height:100%; width:100%;">
	<div class="container" style="margin-top: 25px;
    padding: 30px;
    box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28);
    border-radius: 5px;">
		<div class="row">
			<?php
			if (isset($_POST['signup'])) {
				extract($_POST); //get all information
				
				if (strlen($username) < 3) {
					$error[] = 'Please Enter atleast 3 character';
				}
				if (strlen($username) > 50) {
					$error[] = 'Please Enter less than 50 character';
				}
				if (!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)) {
					$error[] = 'Invalid Entry for Username. Enter lowercase letters without any space and No number at the start- Eg - myusername, okuniqueuser or myusername123';
				}
				if (strlen($email) > 50) {
					$error[] = 'Please Enter less than 50 character';
				}
				
				if ($confirmpass == '') {
					$error[] = 'Please Confirm the Password.';
				}
				if ($password != $confirmpass) {
					$error[] = 'Password do not match';
				}
				if (strlen($password) < 6) {
					$error[] = 'Password atleast 6 character';
				}
				if (strlen($password) > 30) {
					$error[] = 'Password maximum 30 character';
				}
				
				$sql = "select * from admin where (username='$username' or email='$email');";
				$res = mysqli_query($dbc, $sql);
				if (mysqli_num_rows($res) > 0) {
					$row = mysqli_fetch_assoc($res);
					if ($username == $row['username']) {
						$error[] = 'Username already exists';
					}
					if ($username == $row['email']) {
						$error[] = 'Email already exists';
					}
				}
				
					$date = date('Y-m-d');
					$options = array("cost" => 4);

					$password = password_hash($password, PASSWORD_BCRYPT, $options);
					$sql="insert into admin values ('','$username','$password','$email')";
					$result = mysqli_query($dbc,$sql );

					if ($result) {
						$done = 2;
					} else {
						$error[] = 'Failed: Something went wrong';
					}
				}
			
			?>
			<div class="col-sm-4">
				<?php
				if (isset($error)) {
					foreach ($error as $error) {
						echo '<p class="errmsg">&#x26A0;' . $error . '</p>';
					}
				}
				?>
			</div>
			<div class="col-sm-4">
				<?php
				if (isset($done)) {

				?>
					<div class="sucessmsg"><span style="font-size:100px;">&#9989;</span><br>Admin Added Sucessfully.<br><a href="dashboard.php" style="color:#fff;">View here....</a></div>
				<?php } else { ?>
					<div class="signupform" style="margin-top:15px;padding-bottom: 5px;padding-top:5px;">
						<h3 style="color: #299B63;">Art<span>Zone</span></h3>
						<form action="" method="POST">
							
							<div class="mb-3">
								<label class="label_txt">Username</label>
								<input type="text" class="form-control" name="username" value="<?php if (isset($error)) {
																									echo $username;
																								} ?>" required="">
							</div>
							
							<div class="mb-3">
								<label class="label_txt">Email</label>
								<input type="email" class="form-control" name="email" value="<?php if (isset($error)) {
																									echo $email;
																								} ?>" required>
							</div>
							<div class="mb-3">
								<label class="label_txt">Password</label>
								<input type="password" class="form-control" name="password" required>
							</div>
							<div class="mb-3">
								<label class="label_txt">Confirm Password</label>
								<input type="password" class="form-control" name="confirmpass" required>
								
							</div>
							<button type="submit" name="signup" class=" form_btn btn btn-primary" style="background-color: #299B63;">Add Admin</button>																	
						</form>
						
					<?php } ?>
					<br>
					<a href="dashboard.php"><button type="submit" name="signup" class=" form_btn btn btn-primary" style="background-color: #299B63;">BACK</button></a>
					</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>