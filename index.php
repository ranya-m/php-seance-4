<!-- INSTRUCTION 
3 PAGES: ACCUEIL LOGIN REGISTRATION
CHAQUE PAGE MEME BARRE DE NAV 
utiliser include 
Recuperer les datas du formulaire = POST -->
<?php
session_start();
?>


<!DOCTYPE html>
    <html>
        <head>
            <title> Accueil </title>
        </head>
        <body>
        <?php include('nav.php'); ?>
        <h2>Accueil</h2>

       <?php if(isset($_COOKIE["age"]) AND $_COOKIE["age"]>17):?>
        <h3>Contenu reserve aux adultes</h3>
       <?php endif; ?>

        
        
    </body>
    </html>

