<?php require_once("connection.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-image: url('back.jpg'); height:100%; width:100%;">
	<div class="container" style="margin-top: 25px;
    padding: 30px;
    box-shadow: 0px 1px 36px 5px rgba(0, 0, 0, 0.28);
    border-radius: 5px;">
		<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<div class="login">
					<?php
					if (isset($_GET['loginerror'])) {
						$loginerror = $_GET['loginerror'];
					}
					if (!empty($loginerror)) {
						echo '<p class="errmsg">Invalid login credentials, Please Try Again..</p>';
					} ?>
					<h3 style="color: #299B63;">Art<span>Zone</span></h3>
					<form action="login_process.php" method="POST">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Username or Email</label>
							<input type="text" name="login_var" value="<?php if (!empty($loginerror)) {
																			echo  $loginerror;
																		} ?>" class="form-control">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<button type="submit" name="sublogin" class=" form_btn btn btn-primary" style="background-color: #299B63;">Login</button>
					</form>
					
				</div>
			</div>
			<div class="col-sm-4">
			</div>
		</div>
	</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>