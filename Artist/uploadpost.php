<!DOCTYPE html>
<html>
<head>
<title>Upload It</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/upload.css">
<script src="js/upload.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3 W-100">
        <div class="card shadow-Sm W-100" >
            <div class="card-header d-flex justify-content-between" >
                <h4>Image Uploading</h4>
                <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
               <form action="upload.php" method="post" enctype="multipart/form-data">
               		<input type="file" name="file" id="image" onchange="image_select()"> <!-- class="image d-none " id="image" multiple onchange="image_select()"/>-->
                    <!--<button class="cbtn btn-lg " type="button"  onclick="document.getElementById('image').click()" >Upload Image</button>-->
                
            </div>
            <div class="card-body d-flex flex-wrap justify-content-start" id="container">
                <h5>This is Image Preview Block</h5><br/>
                   <h5>after choose click on submit to upload and then back to profile</h5> 
                <!-- <div class="image_container  d-flex  justify-content-center position-relative">
                    <img src="img1.png" alt="image">
                    <span class="position-absolute">&times;</span>
                </div> -->
               
            </div>
            <div class="btn">
            	
                <button type="submit" name="submit" class="Submit" id="Submit" value="Upload">Upload</button>
                <a href="artistprofile.php"><button type="button" class="profile" id="profile" >Back  Profile</button></a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>