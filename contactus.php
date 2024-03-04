<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
         * {
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            overflow-x: hidden;
            height: 0;
        }

        .navbar {
            height: 10vh;
            width: 100vw;
            position: sticky;
            background-color: #8f7a6a;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .art {
            color: white;
            font-size: 2.5vw;
            margin-left: 5%;
            width: 60%;

        }

        .navbar a {
            font-size: 1.1vw;
            margin-right: 3%;
            color: white;
            text-decoration: none;
        }

        .navbar a:hover {
            text-decoration: underline;
            color: white;
        }
        .contact {
            height: 98vh;
            background-image: url("photo.jpg");
            background-size: cover;
            background-color: #8f7a6a;

        }

        .contact h3 {
            font-size: 2.5vw;
            font-weight: 400;
            padding: 4%;
            color: rgb(88, 83, 83);
            text-decoration: none;
        }

        .contact h4 {
            text-align: center;
            font-weight: 400;
            font-size: 1.5vw;
            opacity: 1;
            color: rgb(88, 83, 83);
            
            text-decoration: none;

        }

        .contact p {
            text-align: center;
            opacity: 1;
            font-size: 2vw;
            font-weight: 400;
            
            color: rgb(88, 83, 83);
            text-decoration: none;

        }

        #name {
            height: 4vh;
            width: 20vw;
            border-radius: 2px;
            border: 1px solid rgb(181, 175, 175);
            margin-top: 3%;
        }

        #email {

            height: 4vh;
            width: 20vw;
            font-weight: 400;
            border-radius: 2px;
            border: 1px solid rgb(181, 175, 175);
            margin-top: 1%;
        }

        #mess {
            border-radius: 2px;
            margin-top: 1%;
            border: 1px solid rgb(181, 175, 175);
        }

        #name,
        #email,
        #mess {
            margin-left: 40%;
        }

        .send {
            height: 4vh;
            width: 6vw;
            border-radius: 2px;
            margin-top: 3%;
            background-color: #937d6d;
            color: white;
            border: none;
            margin-left: 47%;
            cursor: pointer;

        }
        .send:hover{
            transform: scale(1.1);
        }
        footer {
            height: 400px;
            
            background-color: #4d3831;
           display: flex;
           justify-content: space-evenly;
          

        }
        footer li{
            list-style: none;
            
        }
        footer ul{
            padding-top: 10%;
            
        }
        footer a{
            color: white;
            text-decoration: none;
            margin-top: 10%;
        }
        footer a:hover{
            text-decoration: underline;

        }
        
        @media screen and (max-width: 768px) {
            .art {
                font-size: 5vw;
            }

            .navbar {
                height: 15vh;
            }

            .navbar a {
                font-size: 4vw;
                margin-right: 2%;
            }

            .contact h3 {
                font-size: 4vw;
            }
        }

        @media screen and (max-width: 480px) {
            .art {
                font-size: 6vw;
            }

            .navbar {
                height: 20vh;
            }

            .navbar a {
                font-size: 5vw;
                margin-right: 2%;
            }

            .contact h3 {
                font-size: 5vw;
            }

            #name, #email, #mess {
                width: 90%;
            }

            .send {
                width: 40%;
                max-width: 8rem;
            }
        }

    </style>
</head>
<body>
<?php include('header.php');?>

    <section class="contact">
        <h3>Contact our friendly Team</h3>
        <p style="margin-right: 65%;
       position: relative;
       bottom: 9%;
       font-size: 1.5vw;
       font-weight: 400;
       color: rgb(88, 83, 83);">Tell us how we can help you?</p>

        <h4>Email Us</h4>
        <p>ArtZone03@gmail.com</p>
        <?php
            
			if (isset($_POST['submit'])) {
				extract($_POST);
                $date = date('Y-m-d');
                $sql="insert into contactus values ('','$name','$email','$message','$date')";
					$result = mysqli_query($dbc,$sql );
                    if ($result) {
						$done = 2;
                        echo "Message Send";
                    
					} else {
						$error[] = 'Failed: Something went wrong';
					}
            }
        ?>
        <form action="" method="POST">
            <div class="form">
                <input type="text" name="name" id="name" placeholder="Name"><br>
                <input type="email" name="email" id="email" placeholder="Email"><br>
                <textarea name="message" id="mess" cols="44" rows="10" placeholder="Message"></textarea>
            </div>
            <button class="send" name="submit">
                Send
            </button>
        </form>
    </section>
   
    <?php include('footer.php');?>
    
</body>
</html>








