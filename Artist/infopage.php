<?php
require_once("connection.php");
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Info Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	
	<center>
		<h1>information of Artist</h1>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php 
					//require_once('connection.php');
					$query1="select * from artist";
					//$query2 ="select * from post";
					$query1_run = mysqli_query($dbc,$query1);
					$check_artist = mysqli_num_rows($query1_run) > 0 ;

					if($check_artist)
					{

						while($row = mysqli_fetch_assoc($query1_run))
						{
							$image = $row['image'];
							?>
							<div class="card">
					<div class="card-body">
						<img src="images/<?php echo $row['image']; ?>" class="card-img-top" alt="image">
						<h2 class="card-title"><?php echo $row['fname']." ".$row['lname'];?></h2>
						<p class="card-text"><?php echo $row['InterestedArts']; ?></p>

					</div>
				</div>

							<?php

						}
					}
					else{
						echo "No Record Found";
					}
				?>	
				
			</div>
		</div>
	</div> 
	<!--POST Information-->
	<center>
		<h1>information of Art</h1>
	</center>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php 
					//require_once('connection.php');
					
					$query2 ="select * from post";

					$query2_run = mysqli_query($dbc,$query2);
					$check_post = mysqli_num_rows($query2_run) > 0 ;
					

					if($check_post)
					{

						while($row = mysqli_fetch_assoc($query2_run))
						{
							$image = $row['post'];

							?>
							<div class="card">
					<div class="card-body">
						<img src="uploads/<?php echo $row['post']; ?>" class="card-img-top" alt="image">
						
						
					</div>
				</div>

							<?php

						}
					}
					else{
						echo "No Record Found";
					}
				?>	
				
			</div>
		</div>
	</div>

</body>

</html>