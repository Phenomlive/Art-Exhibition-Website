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
    <?php
    if(isset($_POST['name']) && !empty($_POST['name'])){
            $name=$_POST['name'];
            $sql="UPDATE users set NAME='$name' where ID='$id';";
            if ($conn->query($sql) === TRUE) {
                echo "<script>Record updated successfully</script>";
            } else {
                echo "<script>Record update failed</script>";
            }
            }
            if(isset($_POST['bio'])&& !empty($_POST['bio'])){
            $bio=$_POST['bio'];
            $sql=mysqli_query($conn,"UPDATE users set BIO='$bio' where ID='$id'");
            echo "trying to set bio";
            }
            if(isset($_POST['image'])&& !empty($_POST['image'])){
            $file_name= $_FILES['image']['name'];
            $temp_name= $_FILES['image']['name'];
            $folder='artist/'.$file_name;
            $sql=mysqli_query($conn,"Update users set img_path='$file_name' where ID='$id'");
            if(move_uploaded_file($temp_name,$folder)){
                $msg = "New Picture Uploaded Successfully!";
            }else{
                $msg = "File Not Uploaded!";
            }
    }
?>
</html>