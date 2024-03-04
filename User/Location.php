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

        
       

        
        .abc{
            height: 60vh;
            width: 100%;
           background-color: #e5cfbe;
           
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
        .abc h1{
            font-weight: 400;
            color: rgb(93, 83, 83);
            text-align: center;
            padding-top: 5%;
            
        
        }
        #email{
            height: 5vh;
            width: 40vw;
            background: none;
            border: 2px solid white;
            border-radius: 5px;
            margin-left: 30%;
            margin-top: 3%;

        }
        ::placeholder{
            padding-left: 3%;
            color: white;
            font-size: 1.2vw;
        }
        .sub{
            height: 5vh;
            width: 10vw;
            background-color:#8f7a6a;
            border: none;
            color: white;
            border-radius: 4px;
            margin-left: 45%;
            margin-top: 3%;
            cursor: pointer;
        }
        .sub:hover{
            transform: scale(1.1);
        }
        @media (max-width: 768px) {
            .art {
                font-size: 5vw;
            }

            .navbar a {
                font-size: 2vw;
            }

            .abc h1 {
                font-size: 3vw;
            }

            #email {
                width: 80%;
            }

            .sub {
                width: 30%;
            }
        }

        @media (max-width: 480px) {
            .art {
                font-size: 8vw;
            }

            .navbar a {
                font-size: 3vw;
            }

            .abc h1 {
                font-size: 4vw;
            }
        }

       
    </style>
</head>

<body>
<?php include('header.php');?>
    <section class="abc">
        
        <h1>Subscribe to our News Letter</h1>
         <input type="email" name="email" id="email" placeholder="Email"> <br>

         <button class="sub">
            Subscribe
         </button>

    </section>

    
    
    <?php include('footer.php');?>



  
    

</body>

</html> 

















