<?php
    session_start();
    if(!isset($_SESSION['simple_login'])){
        header("Location: index.php");
        exit();
    }
     
/*** you can  write your protected content here ***/
 
?>
<h1 align="center">Welcome, <?php echo $_SESSION['simple_login']; ?></h1>
<p align="center"><a href="logout.php">Logout</a></p>
