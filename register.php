<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title> REGISTRATION </title>
</head>

<body>
    <?php include('nav.php'); ?>
    <h2>REGISTRATE A NEW ACCOUNT</h2>

    <form action="./form.php" method="POST">
        <input type="email" placeholder="Enter email" name="email" />
        <input type="text" placeholder="Enter your name" name="name" />
        <input type="text" placeholder="Enter your surname" name="surname" />
        <input type="date" placeholder="Enter birth date" name="birth" />
        <input type="password" placeholder="Enter password" name="password" />
        <input type="submit" name="register" />
    </form>
</body>

</html>