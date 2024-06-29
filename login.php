<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="header">
        <img src="img/logo.png" onclick="location.href='index.php'">
        <input type="text" id="searchTopic" placeholder="Search For Anything">
        <a href style="font-size: 25px;"><i class="fas fa-cart-plus"></i></a>
        <a href="aboutus.php"> About Us</a>
        <a href="gallery.php"> See Gallery</a>
        <a href="Index.php" >Home</a>
    </div>

    <div class="container">
        <div class="box">
          <span class="borderLine"></span>
          <form name="f1" action="authentication.php" method="post">
            <h2>Sign in</h2>
            <div class="inputBox" name="input1">
              <input type="email" id="email" required="required" name="email"/>
              <span>Username</span>
              <i></i>
            </div>
            <div class="inputBox" name="input2">
              <input type="password" id="password" required="required" name="password" />
              <span>Password</span>
              <i></i>
            </div>
            <div class="links">
              <a href="signup.php">Signup</a>
            </div>
            <input type="submit" id="btn" value="Login" name="Login"/>
          </form>
        </div>
      </div>
  
</body>
</html>