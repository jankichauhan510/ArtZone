<?php 
// Include the database configuration file 
include_once 'connection.php'; 

if (!isset($_SESSION["login_sess"])) {
    header("location:login.php");
}
$email = $_SESSION["login_email"];
$statusMsg = ''; 
 
// File upload directory 
$targetDir = "uploads/"; 
 
if(isset($_POST["submit"])){ 
    $file = $_FILES['file'];
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database 
                $insert = $dbc->query("INSERT INTO post (post, uploaded_on,email) VALUES ('".$fileName."', NOW(),'$email')"); 
                if($insert){ 
                    $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    header("Location: artistprofile.php");
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>