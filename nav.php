
<nav>
    <ul>
        <li><a href="index.php">Page 1: Homepage</a></li>
        <?php if ($_SESSION["logged"]) :?>
            <li><a href="form.php?logout=1">Deconnexion</a></li>
            <li><a href="protege.php">Admin</a></li>
        <?php else:?>
            <li><a href="login.php">Page 2: login into your account</a></li>
        <li><a href="register.php">Page 3: register your new account</a></li>
        <?php endif;?> 
        
    </ul>
</nav>

