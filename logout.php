<?php 
    session_start();
    $msg ='Logging Out!';
    echo "<script>alert('$msg'); location.href='index.php'</script>";
    session_destroy();
?>