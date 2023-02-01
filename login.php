<?php
session_start();
?>
<!DOCTYPE html>
    <html>
        <head>
            <title> LOGIN </title>
        </head>
        <body>
        <?php include('nav.php'); ?>

        <h2>LOGIN INTO YOUR ACCOUNT</h2>
        <?php if (isset($_SESSION["error"])) :?>
        <?=$_SESSION["error"]?>
        <?php endif ?>
        <form action="./form.php" method="POST">
            <input type="email" placeholder="Enter Your Email" name ="email"/>
            <input type="password" placeholder="Enter password" name ="password"/>
            <input type="submit" name="login"/>
        </form>
    </body>
    </html>
<?php
// destroy the error variable after displayed for the first time
unset($_SESSION["error"]);