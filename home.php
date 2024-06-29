<?php
    session_start();
    if (!isset($_SESSION['id'])){
        $msg ='ACCESS DENIED!';
        echo "alert('$msg')" ;
        echo "location.href='login.php'";
    }else{
        include ("connection.php");
        $requested_user=$_SESSION['username'];
        $id=$_SESSION['id'];
    }
    error_reporting(E_ALL);

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="icon" href="img/logo.png">
    <title> Online Art Gallery</title>
    <script src="https://kit.fontawesome.com/d989eee63d.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="header">
        <img src="img/logo.png" onclick="location.href='home.php'">
        <form action="arts.php" method="post"><input type="text" name="searchTopic" placeholder="Search For Anything"></form>
        <a href="Logout.php" style="font-size: 15px;"><i class="fas fa-user"><text style="font-size:10px"><br>Log<br>Out</i></a></text>
        <a href="aboutus.php"> About Us</a>
        <a href="gallery.php"> See Gallery</a>
    </div> 
    <div class="main-body">
        <div class="artist-section">
            <table>
                <tr>
                    <td>
                    <img src = "artist/<?php  
                    $sql="SELECT * from users where id='$id'";
                    $result = mysqli_query($con, $sql);  
                    $count = mysqli_num_rows($result);  
                    if($count==1){
                    $row=$result->fetch_assoc();
                    echo "".$row["img_path"];
                    }else{
                        echo "error occured in fetching user image";
                    }
                ?>">
                    <h4> <?php echo $row['NAME'];?> </h4>
                    </td>
                    <td> 
                        <?php if($count==1){echo $row["BIO"];}?> 
                        <br>
                        <br>
                        <i class="fas fa-edit" onclick="location.href='editprofile.php'"><text style="font-size:10px;">Edit</text></i>
                    </td>
                </tr>
            </table>
        </div>
        <div class="container mt-4">
        <div class="row">
            <?php $sql = "SELECT * from arts;";  
							$result = $con->query($sql);
							$attr=0;   
							while($row = $result->fetch_assoc()){
			?>
								
                <div class="col-md-4">
                    <div class="card-mb-4">
                        <img src=<?php echo "img/".$row['img_path']; ?>
                        <text><?php echo $row["Title"];?></text>        
                    </div>
                </div>
                <?php } ?>
    </div>
           
    </div>
</body>
</html>