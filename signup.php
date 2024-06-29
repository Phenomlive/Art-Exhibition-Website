<html>
<head>
    <link href="signup.css" rel="stylesheet"/>
    <link href="main.css" rel="stylesheet"/>
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
        <img src="img/logo.png" onclick="location.href='index.php'">
        <a href="aboutus.php"> About Us</a>
        <a href="Index.php" >Home</a>
    </div>
    <div class="sign-main-body" style="padding-left: 40%;">
          <form name="f1" action="registration.php" method="post">
            <h2>Registration</h2>
              <label for = "name"> Full Name </label>
              <br>
              <input type="text" id="name" required="required" name="name"/>
              <br><label for = "username"> Username </label>
              <br><input type="username" id="username" required="required" name="username"/>
              <br><label for = "email"> Email </label>
              <br><input type="email" id="email" required="required" name="email"/>
              <br><label for = "password"> Password </label>
              <br><input type="password" id="password" required="required" name="password" /> 
              <br><input type="submit" id="btn" value="Sign Up" name="Login"/>
          </form>
      </div>
  
</body>
</html>