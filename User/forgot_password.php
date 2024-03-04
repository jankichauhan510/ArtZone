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
        *{
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body{
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
         p {
            text-align: center;
            padding-top: 1%;
            color: grey;
        }
        .reset{
            font-weight: 400;
            text-align: center;
            margin-top: 6%;
        }
        #email{
            margin-top: 3%;
            display: flex;
            justify-content: center; 
            align-items: center; 
            margin-left: 40%;
            width: 20vw;
            color: grey;
            height: 25px;
        }
        #email:hover{
            border: 2px solid #8f7a6a;
        }
        .submit{
            height: 30px;
            width: 100px;
            background-color: #8f7a6a;
            color: white;
            border: none;
            margin-left: 46.2%;
            cursor: pointer;
        }
        .submit:hover{
            height: 31px;
            width: 101px;
        }
        #cancel{
            margin-left: 48.3%;
            text-decoration: none;
            color: #8f7a6a;
            
        }
        #cancel:hover{
            text-decoration: underline;
        }
        footer {
            height: 400px;
            margin-top: 10%;
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
        @media (max-width: 768px) {
            .art {
                font-size: 6vw;
            }

            .navbar a {
                font-size: 4vw;
                margin-right: 2%;
            }

            .reset {
                font-size: 4vw;
            }

            p {
                font-size: 3vw;
            }
            
        }

    

    
    </style>
</head>
<body>
    <nav class="navbar">
        <h1 class="art">ArtZone</h1>
        <a href="home_page.html">Home</a>
        <a href="login.html">Login</a>
        <a href="create_acc.html">Register</a>
        <a href="about.html">About Us</a>
        <a href="blog.html">Blog</a>
    </nav>
    <h1 class="reset">Reset your password</h1>
    <p>We will send you an email to reset your password</p>
    <input type="email" name="email" id="email"placeholder="Email">
    <br>
    <button class="submit">Submit</button>
    <br><br>
    <a id="cancel" href="home_page.html">cancel</a>
    <br><br>

    
    <footer>

        <ul>
            <li><a href="home_page.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="feedback.html">FeedBack</a></li>
            <li><a href="help.html">Help</a></li>
        </ul>

        <ul>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="faq.html">FAQ's</a></li>
            <li><a href="login.html">Sign In</a></li>
            <li><a href="help.html">Help</a></li>
        </ul>
        <ul>
            <li><a href="Our_story.html">Our Story</a></li>
            <li><a href="policy.html">Private Policy</a></li>
            <li><a href="return_and_ex.html">Return and Exchange</a></li>
            <li><a href="help.html">Help</a></li>
        </ul>
        <ul>
            <li><a href="create_acc.html">Register</a></li>
            <li><a href="Our_mission.html">Our Mission</a></li>
            <li><a href="Location.html">News Letter</a></li>
            <li><a href="help.html">Help</a></li>
        </ul>
    </footer>
    
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
