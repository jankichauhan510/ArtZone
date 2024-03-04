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

        .faq h1 {
            text-align: center;
            padding: 5%;
            font-weight: 400;
            font-size: 2vw;

        }

        .ques {
            max-width: 700px;
            margin-top: 2rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #8f7a6a;
            cursor: pointer;

        }

        .question {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .question h3 {
            font-size: 1.2rem;
            color: #8f7a6a;
        }

        .answer p {
            padding-top: 1rem;
            line-height: 1.3;
            font-size: 1rem;
            transition: max-height 1.4s ease;
        }

        .all {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .answer {
            max-height: 0;
            overflow: hidden;
        }

        .ques.active svg {
            transform: rotate(180deg);
        }

        .ques.active .answer {
            /* max-height: 300px; */
            animation: fade 1s ease-in-out;
        }

        svg {
            transition: transform 0.5s ease-in;
        }

        @keyframes fade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0px);
            }
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

        @media screen and (max-width: 768px) {

            /* Adjust the navigation bar for smaller screens */
            .art {
                font-size: 5vw;
                /* Increase font size */
            }

            .navbar {
                height: 15vh;
                /* Increase height */
            }

            .navbar a {
                font-size: 4vw;
                /* Increase font size for links */
                margin-right: 2%;
                /* Decrease margin between links */
            }

            .faq h1 {
                font-size: 4vw;
                /* Increase font size for FAQ title */
            }

            /* Adjust the width of .art and margin for smaller screens */
            .art {
                margin-left: 2%;
                width: 80%;
            }

            /* Adjust font size for questions and answers */
            .question h3 {
                font-size: 1.5rem;
            }

            .answer p {
                font-size: 1.2rem;
            }
        }

        /* Add more media queries for other screen sizes if needed */

        /* Original styles for larger screens */
        .ques.active .answer {
            animation: fade 1s ease-in-out;
        }

        /* ... (rest of your CSS) */

        /* Mobile styles */
        @media screen and (max-width: 480px) {
            .art {
                font-size: 6vw;
                /* Increase font size for the title */
            }

            .navbar {
                height: 20vh;
                /* Increase height of the navigation bar */
            }

            .navbar a {
                font-size: 5vw;
                /* Increase font size for links */
                margin-right: 2%;
                /* Decrease margin between links */
            }

            .faq h1 {
                font-size: 5vw;
                /* Increase font size for FAQ title */
            }

            /* Adjust the width of .art and margin for smaller screens */
            .art {
                margin-left: 2%;
                width: 80%;
            }

            /* Adjust font size for questions and answers */
            .question h3 {
                font-size: 1.8rem;
                /* Increase font size for questions */
            }

            .answer p {
                font-size: 1.4rem;
                /* Increase font size for answers */
            }

            /* Footer styles for mobile */
            footer {
                flex-direction: column;
                align-items: center;
                height: auto;
                /* Adjust height to fit content */
            }

            footer ul {
                padding-top: 5%;
                /* Adjust padding between lists */
            }

            footer li {
                margin-bottom: 5%;
                /* Adjust margin between list items */
            }
        }
    </style>
</head>

<body>
<?php include('header.php');?>

    <section class="faq">
        <h1>Frequently Asked Questions</h1>
    </section>

    <div class="all">



        <div class="ques">
            <div class="question">
                <h3>What is your platform all about?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    Our platform is a marketplace designed exclusively for small-scale businesses. It provides a space
                    for
                    these businesses to showcase and sell their products to a broader audience, helping them reach new
                    customers and grow their brand.
                </p>
            </div>

        </div>



        <div class="ques">
            <div class="question">
                <h3> Who can use this platform?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    Any small-scale business can join our platform, whether you're a local artisan, a home-based
                    business, a
                    startup, or a mom-and-pop store. We're here to support all types of small businesses.
                </p>
            </div>

        </div>



        <div class="ques">
            <div class="question">
                <h3> Is it free to join as a seller? </h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    Yes, joining our platform as a seller is completely free. There are no upfront costs or monthly
                    fees. We
                    only charge a small commission on successful sales, which helps us maintain and improve the
                    platform.

                </p>
            </div>

        </div>


        <div class="ques">
            <div class="question">
                <h3> What kind of products can I sell on your platform?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    You can sell a wide range of products on our platform, including handmade crafts, clothing,
                    accessories,
                    electronics, food items, and more. However, we have certain policies in place to ensure the quality
                    and
                    legality of the products.
                </p>
            </div>

        </div>


        <div class="ques">
            <div class="question">
                <h3> How do customers find my products?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    Customers can search for products on our platform by using keywords, categories, and filters. The
                    more
                    detailed and accurate your product listings are, the easier it will be for potential customers to
                    find
                    your products.
                </p>
            </div>

        </div>



        <div class="ques">
            <div class="question">
                <h3> Is there a review system for sellers and products?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    Yes, we have a review system where customers can leave feedback and ratings for both sellers and
                    products. Positive reviews can help boost your credibility and sales.
                </p>
            </div>

        </div>



        <div class="ques">
            <div class="question">
                <h3>How do I handle returns and customer issues?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    We have a return and dispute resolution process in place to handle customer issues and returns. We
                    encourage sellers to work closely with customers to resolve any concerns promptly.
                </p>
            </div>

        </div>




        <div class="ques">
            <div class="question">
                <h3>How can I promote my products on your platform?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    We offer various tools and features to help you promote your products, including product listings,
                    featured spots, and promotional campaigns. Additionally, you can share your products on social media
                    and
                    invite your existing customers to visit your store on our platform.
                </p>
            </div>

        </div>




        <div class="ques">
            <div class="question">
                <h3> How can I contact your customer support team?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    You can reach our customer support team through the "Contact Us" section on our website. We're here
                    to
                    assist you with any questions or issues you may have.
                </p>
            </div>

        </div>




        <div class="ques">
            <div class="question">
                <h3> Is my data and business information secure on your platform?</h3>

                <svg width="15" height="10" viewbox="0 0 42 25">
                    <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
                </svg>
            </div>
            <div class="answer">
                <p>
                    We take data security seriously and implement measures to protect your information. We do not share
                    your
                    data with third parties without your consent.
                </p>
            </div>

        </div>

    </div>




    <?php include('footer.php');?>


    <script src="faq.js"></script>





</body>

</html>