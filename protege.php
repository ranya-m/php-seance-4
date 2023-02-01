<?php
session_start();
if(!$_SESSION["logged"] OR !isset($_SESSION["logged"] )) {
    header("location:./login.php");
}
?>
<!DOCTYPE html>
<html>
        <head>
            <title> Admin Page </title>
        </head>
        <body>
        <?php include('nav.php'); ?>
        <h1>Admin Page</h1>
        <h2>ACCOUNT ACCESSED</h2>
        <h4><?=$_SESSION["name"]?></h4>
        <h4><?=$_SESSION["email"]?></h4>
        <h4><?=$_SESSION["birth"]?></h4>
    </body>
    </html>