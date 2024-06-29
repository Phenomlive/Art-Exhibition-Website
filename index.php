<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="icon" href="img/logo.png">
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="header">
        <img src="img/logo.png" onclick="location.href='index.php'">
        <form method="post">
        <input type="text" name="searchTopic" placeholder="Search For Anything">
        <input type="submit" value="Search">
        </form>
        <a href="login.php" >Log In</a>
        <a href="aboutus.php"> About Us</a>
        <a href="gallery.php"> See Gallery</a>
    </div>
    <div class="main-body">
        <div class="image-slider-container">
            <div class="image-slider fade">
                <img src="img/img1.png">
                <a href="" style="text-decoration: none;">
                <div class="text">
                    <p style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> We Offer You A Place Where You Can</p>
                    <text style="color:rgb(214, 155, 72)">Showcase</text> Your Art</div>
                </a>
            </div>
            <div class="image-slider fade">
                <img src="img/img2.png">
                <a href="" style="text-decoration: none;">
                <div class="text"><text style="color:rgb(242, 92, 42)">Discover</text> Desi Art</div>
                </a>
            </div>
            <div class="image-slider fade">
                <img src="img/img3.png">
                <a href="" style="text-decoration: none;">
                <div class="text">
                    <p style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"> Grab A Chance To</p>
                    <text style="color:rgb(237, 208, 167)">Witness</text> Their Art
                </div>
                </a>
            </div>
            <div class="dots">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
            </div>
        </div>
        <script>
            let i;
            let slideIndex=0;
            showSlides();
            function showSlides() {
                let slides = document.getElementsByClassName("image-slider");
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); 
            }
        </script>
        <div class="category-box">
            <table>
                <tr>
                    <td colspan="4" style="padding-top: 2%;">
                    <a id = "categories" style="text-decoration: none;">
                    <h3 
                    style="font-size:35px; 
                            font-family:cursive;
                            padding-top: 20px;
                            font-weight: bold;
                            color: rgb(205, 154, 54);
                            text-shadow: 0 0 5px rgb(237, 223, 190),
                            0 0 10px rgb(237, 223, 190),
                            0 0 15px rgb(237, 223, 190);
                            display: inline-block">Explore Our Gallery</h3>
                    </a>
                    </td>
                </tr>
                <tr id="categories">
                    <td> <img src="img/rural.jpeg" onclick="location.href='scenary.php'"></td>
                    <td> <img src="img/abstract.jpeg" onclick="location.href='abstract.php'"></td>
                    <td> <img src="img/alpona.jpeg"  onclick="location.href='alpona.php'"></td>
                    <td> <img src="img/digital.jpeg" onclick="location.href='digital.php'"></td>
                </tr>
                <tr>
                    <td  onclick="location.href='scenary.php'"> Scenary</td>
                    <td  onclick="location.href='abstract.php'"> Abstract</td>
                    <td  onclick="location.href='alpona.php'"> Alpona</td>
                    <td  onclick="location.href='digital.php'"> Digital</td>
                </tr>
            </table>
        </div>
        <br>
        <div class="join-box">
            <img src="img/jointheme.png">
                <a href="signup.php" style="text-decoration: none;">
                <div class="text2">
                    <text style="font-family:Impact; text-decoration:bold; color:rgb(237, 208, 167) font-size: 45px;">Join<br> Us</text>
                </div>
                </a>
        </div>

    </div>
</body>
</html>