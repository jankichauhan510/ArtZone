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

        .heading {
            text-align: center;
            padding-top: 5%;
        }

        .heading h1 {
            font-size: 2vw;
            font-weight: 400;
        }

        .head {
            font-size: 1.3vw;
            color: #8f7a6a;
            padding-left: 5%;
            padding-right: 5%;
            font-style: italic;
        }

        .cont {
            padding-left: 5%;
            padding-right: 5%;
            font-style: italic;
        }

        footer {
            height: 400px;
            margin-top: 10%;
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

        /* Media Queries for Responsiveness */

        @media (max-width: 768px) {
            .art {
                font-size: 4vw;
            }

            .navbar a {
                font-size: 3vw;
                margin-right: 2%;
            }

            .heading h1 {
                font-size: 3vw;
            }

            .head {
                font-size: 2vw;
            }

            .cont {
                font-size: 2vw;
            }

            footer {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width: 480px) {
            .art {
                font-size: 6vw;
            }

            .navbar a {
                font-size: 4vw;
                margin-right: 1%;
            }

            .heading h1 {
                font-size: 4vw;
            }

            .head {
                font-size: 3vw;
            }

            .cont {
                font-size: 3vw;
            }
        }
    </style>
</head>

<body>
<?php include('header.php');?>
    <section class="heading">
        <h1>Our Mission</h1>
    </section>

    <section class="content"> <br><br>
        <p>
        <div class="cont">At ArtZone, our mission is to empower small-scale businesses by providing them with a platform
            to showcase their unique products to a global audience. We are driven by a deep commitment to fostering
            entrepreneurship, creativity, and economic growth at the grassroots level. </div><br>

        <p class="head">What Drives Us</p> <br>

        <div class="cont">
            Supporting Local Entrepreneurs: We believe in the power of small-scale businesses and the innovation and
            passion they bring to their craft. Our platform is dedicated to giving these entrepreneurs a voice and the
            tools they need to thrive in a competitive marketplace. <br>

            Promoting Inclusivity: We are committed to promoting inclusivity and diversity within the small business
            community. We aim to create a marketplace where all entrepreneurs, regardless of their background, can
            succeed and prosper. <br>

            Connecting Buyers and Sellers: Our platform serves as a bridge that connects buyers who seek unique and
            quality products with small-scale sellers who offer one-of-a-kind goods. We facilitate these connections to
            create mutually beneficial relationships. <br>

            Fostering Economic Growth: We envision a world where small businesses play a vital role in driving economic
            growth and innovation. By providing a platform for these businesses to thrive, we contribute to the
            prosperity of communities and regions around the world. <br>
        </div> <br>

        <p class="head">Timeframe for Returns and Exchanges</p> <br>

        <div class="cont">The timeframe for initiating a return or exchange may vary from seller to seller. Please check
            the seller's
            product listing or contact the seller directly for information on their specific return and exchange
            timeframe.</div> <br>

        <p class="head">Our Vision for the Future</p> <br>

        <div class="cont">
            Looking ahead, we aspire to see ArtZone as the go-to destination for discovering and supporting
            small-scale businesses. We envision a future where every small-scale entrepreneur can achieve their dreams
            and reach a global audience, all while preserving their unique craftsmanship and authenticity.
        </div> <br>

        <p class="head">Join Us in Empowering Small Businesses</p> <br>

        <div class="cont">
            We invite you to join us on our mission to empower small-scale businesses. Whether you're a customer looking
            for distinctive products or a small-scale business owner seeking a platform to showcase your creations,
            ArtZone  is here to support you. Together, we can build a stronger, more inclusive, and vibrant
            small business ecosystem.

            Thank you for being a part of our journey. Together, we can make a meaningful impact and create
            opportunities for small-scale businesses to shine.
        </div>


        </p>

    </section>


    <?php include('footer.php');?>

</body>

</html>
