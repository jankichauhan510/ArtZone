<?php
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ART ZONE</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 0;
            overflow-x: hidden;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .carousel {
            height: 80vh;
            width: 100vw;
            position: relative;

        }

        .slide {
            opacity: 0;
            inset: 0;
            position: absolute;
            transition: 200ms opacity ease-in-out;
            transition-delay: 200ms;
        }

        .slide[data-active] {
            opacity: 1;
            z-index: 1;
            transition-delay: 0ms;
        }

        .slide>img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .carousel-button-prev,
        .carousel-button-next {
            position: absolute;
            z-index: 2;
            background: none;
            border: none;
            font-size: 4rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, .5);
            cursor: pointer;
            padding: 0.5rem;
            background-color: rgba(0, 0, 0, .1);
        }

        .carousel-button-prev:hover,
        .carousel-button:focus {
            color: white;
            background-color: rgba(0, 0, 0, .2);

        }

        .carousel-button-next:hover,
        .carousel-button:focus {
            color: white;
            background-color: rgba(0, 0, 0, .2);

        }

        .carousel-button-prev {
            left: 1rem;
        }

        .carousel-button-next {
            right: 1rem;
        }


        .navbar {
            height: 10vh;
            width: 100vw;
            position: sticky;
            top: 0;
            left: 0;
            background-color: #8f7a6a;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .art {
            color: white;
            font-size: 2.5vw;
            margin-left: 5%;
            width: 55%;

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

        .explore {
            background-color: #8f7a6a;
            height: 58vh;
            width: 100vw;

        }

        .explore h1 {
            text-align: center;
            font-size: 1.5vw;
            font-weight: 400;
            color: white;
            padding-top: 1%;

        }

        .mini {
            height: 40vh;
            width: 90vw;
            margin: auto;
            display: flex;
            justify-content: space-evenly;
            margin-top: 1.5%;
        }

        .sizes {
            height: 40vh;
            width: 25vw;


        }

        .one img {
            height: 40vh;
            width: 25vw;
            background-size: cover;
            background-position: center center;
            border-radius: 10px;
        }

        .one img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .two img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .three img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .two img {
            height: 40vh;
            width: 25vw;
            background-size: cover;
            background-position: center center;
            border-radius: 10px;
        }

        .three img {
            height: 40vh;
            width: 25vw;
            background-size: cover;
            background-position: center center;
            border-radius: 10px;
        }

        .explore p {
            margin-left: 30%;
            color: white;
            font-size: 1.3vw;
            margin-top: 4%;
        }

        .about {
            background-color: #d1bcab;
            height: 65vh;

        }

        .about h1 {
            text-align: center;
            color: white;
            font-weight: 400;
            padding-top: 2%;
        }

        .information {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .information p {
            width: 50vw;
            margin-left: 10%;
            color: white;
        }

        .cnt {
            height: 50vh;
            width: 20vw;
            margin-top: 1%;

        }

        .cnt img {
            height: 50vh;
            width: 20vw;
            background-size: cover;
            background-position: center center;
        }

        .more {
            height: 5vh;
            width: 8vw;
            font-size: 1.2vw;
            position: relative;
            left: 40%;
            bottom: 7%;
            border: none;
            background-color: #8f7a6a;
            color: white;
            cursor: pointer;
        }

        .contact {
            height: 100vh;
            background-image: url("contact-img.jpg");
            background-size: cover;
            background-color: #8f7a6a;

        }

        .contact h3 {
            font-size: 2.5vw;
            font-weight: 300;
            padding: 4%;
            color: black;
            text-decoration: none;
        }

        .contact h4 {
            text-align: center;
            font-weight: 300;
            font-size: 1.5vw;
            opacity: 1;
            color: black;
            text-decoration: none;

        }

        .contact p {
            text-align: center;
            opacity: 1;
            font-size: 2vw;
            font-weight: 300;
            color: black;
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

        footer {
            height: 400px;
            background-color: #4d3831;
            display: flex;
            justify-content: space-evenly;


        }

        footer li {
            list-style: none;

        }

        footer ul {
            padding-top: 10%;

        }

        footer a {
            color: white;
            text-decoration: none;
            margin-top: 10%;
        }

        footer a:hover {
            text-decoration: underline;

        }

        .more a {
            text-decoration: none;
            color: white;
        }


        @media (max-width: 768px) {
            .navbar {
                padding: 10px;
            }

            .art {
                font-size: 4vw;
            }

            .navbar a {
                font-size: 2vw;
            }

            .carousel-button-prev,
            .carousel-button-next {
                font-size: 6vw;
            }

            .explore h1 {
                font-size: 4vw;
            }

            .sizes {
                flex-basis: calc(50% - 20px);
            }

            .about h1 {
                font-size: 4vw;
            }

            .information p {
                flex-basis: 100%;
            }

            .cnt {
                flex-basis: 100%;
            }

            .more {
                font-size: 2vw;
                padding: 2vw 4vw;
                left: 30%;
                bottom: 10%;
            }

            .contact h3,
            .contact h4,
            .contact p {
                font-size: 4vw;
            }

            #name,
            #email,
            #mess {
                width: 100%;
                max-width: none;
                font-size: 3vw;
            }

            .send {
                width: 50%;
                max-width: none;
                font-size: 3vw;
                padding: 2vw;
            }

            footer a {
                font-size: 2vw;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                padding: 5px;
            }

            .art {
                font-size: 6vw;
            }

            .navbar a {
                font-size: 3vw;
            }

            .carousel-button-prev,
            .carousel-button-next {
                font-size: 8vw;
            }

            .explore h1 {
                font-size: 5vw;
            }

            .sizes {
                flex-basis: calc(100% - 20px);
            }

            .about h1 {
                font-size: 5vw;
            }

            .information p {
                flex-basis: 100%;
            }

            .cnt {
                flex-basis: 100%;
            }

            .more {
                font-size: 3vw;
                padding: 3vw 6vw;
                left: 20%;
                bottom: 15%;
            }

            .contact h3,
            .contact h4,
            .contact p {
                font-size: 6vw;
            }

            #name,
            #email,
            #mess {
                width: 100%;
                max-width: none;
                font-size: 4vw;
            }

            .send {
                width: 70%;
                max-width: none;
                font-size: 4vw;
                padding: 3vw;
            }

            footer a {
                font-size: 3vw;
            }
        }
    </style>
</head>

<body>

    <?php include('header.php'); ?>



    <section aria-label="new photos">
        <div class="carousel" data-carousel="">
            <button class="carousel-button-prev" data-carousel-button="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="carousel-button-next" data-carousel-button="next"><i class="fa-solid fa-angle-right"></i></button>
            <ul data-slides="">
                <li class="slide" data-active="">
                    <img src="image/new1.jpg" alt="paintings" class="prop">
                </li>
                <li class="slide">
                    <img src="image/newtwo.jpg" alt="plants" class="prop">

                </li>
                <li class="slide">
                    <img src="image/newthree.jpg" alt="wall-clock" class="prop">
                </li>

            </ul>
        </div>

    </section>

    <section class="explore">
        <h1>Explore Unique Arts</h1>
        <div class="mini">
            <div class="one sizes">
                <img src="image/mini1.jpg">
                <p>Handmade Jewellery</p>
            </div>
            <div class="two sizes">
                <img src="image/mini2.jpg">
                <p>Aesthetic Wall Paintings</p>
            </div>
            <div class="three sizes">
                <img src="image/mini3.jpg">
                <p>Interior Designs</p>
            </div>

        </div>

    </section>

    <section class="about">
        <h1>About Us</h1>
        <div class="information">
            <div class="cnt">
                <img src="image/about.jpg">
            </div>

            <p>
                Welcome to ArtZone, the ultimate platform for showcasing and selling your products to the world! We are
                more than just a website; we are your partner in success, dedicated to helping you unleash your
                creativity and reach a global audience.

                At ArtZone, we believe that everyone has something unique to offer, whether it's handcrafted artwork,
                vintage treasures, cutting-edge gadgets, or homemade delicacies. Our mission is to provide a
                user-friendly, secure, and dynamic platform that empowers individuals and businesses alike to bring
                their products to the forefront of the digital marketplace.
                Ready to take your products to the next level?
                <br><br>
                Join ArtZone today and embark on an exciting journey of creativity, growth, and success. Whether you're
                looking to showcase your craftsmanship, reach a broader audience, or start your own business, we're here
                to make it happen.

                Together, let's turn your dreams into reality. Start selling, start showcasing, start thriving with
                ArtZone. Welcome to the future of commerce!
            </p>
        </div>

        <button class="more">
            <a href="about.html">More</a>
        </button>

        <section class="contact">
            <h3>Contact Us</h3>
            <h4>Email Us</h4>
            <p>ArtZone03@gmail.com</p>
            <?php

            if (isset($_POST['submit'])) {
                extract($_POST);
                $date = date('Y-m-d');
                $sql = "insert into contactus values ('','$name','$email','$message','$date')";
                $result = mysqli_query($dbc, $sql);
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

        <?php include('footer.php'); ?>

</body>
<script>
    const buttons = document.querySelectorAll("[data-carousel-button]");
    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const offset = button.dataset.carouselButton === "next" ? 1 : -1;
            const slides = button.closest("[data-carousel]").querySelector("[data-slides]");
            const activeSlide = slides.querySelector("[data-active]");
            let newIndex = [...slides.children].indexOf(activeSlide) + offset;
            if (newIndex < 0) newIndex = slides.children.length - 1;
            if (newIndex >= slides.children.length) newIndex = 0;

            activeSlide.removeAttribute("data-active");
            slides.children[newIndex].setAttribute("data-active", "true");
        });
    });
</script>
</body>

</html>