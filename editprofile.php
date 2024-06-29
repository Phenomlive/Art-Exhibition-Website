<?php
    session_start();
    if (!isset($_SESSION['id'])){
        $id=$_SESSION['id'];
        $msg ='ACCESS DENIED!';
        echo "alert('$msg')" ;
        echo "location.href='login.php'";
    }else{
        include ("connection.php");
        $requested_user=$_SESSION['username'];
        $id=$_SESSION['id'];
        error_reporting(E_ALL);
    }

?>
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
          <form method="post" enctype="multipart/form-data" action="edit.php">
            <h2>Edit Profile</h2>
            <div class="inputBox" name="input1">
              <input type="text" id="name" name="name"/>
              <span>Full Name</span>
            </div>
            <div class="inputBox" name="input2">
              <input type="text" id="bio" name="bio" />
              <span>Bio</span>
            </div>
            <div class="inputBox" name="input1">
              <input type="file" id="image" name="image"/>
              <span>Profile Picture</span>
            </div>
            <input type="submit" id="btn" value="Upload" name="Login"/>
          </form>
        </div>
        <?php 
        ?>
      </div>
  
</body>
</html>