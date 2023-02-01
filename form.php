<?php
session_start();
$name = "";
$email = "";
$birth = "";
$password = "";

function getInput($inputName) {
    if(empty($_POST[$inputName])) {
        echo "$inputName IS EMPTY !!!!!! <br/>";
        return false;
    }else {
        return htmlspecialchars($_POST[$inputName]);
    }
}

// manage login
if(isset($_POST["login"])){
    $email = htmlspecialchars($_POST["email"]) ;
    $password = htmlspecialchars($_POST["password"]);

//vérification de la connexion de l'utilisateur : les valeurs saisies sont correctes 

    if(isset($_SESSION["email"]) AND isset($_SESSION["password"])){
        if($_SESSION["email"] == $email and $_SESSION["password"]== $password){
            $_SESSION["logged"] = true;
            header("location:./protege.php");
        }else {
            $_SESSION["error"] = "Email or password incorrect";
            header("location:./login.php");
        }
    }else{
        $_SESSION["error"] = "Compte non existant";
        header("location:./register.php");
    }

    echo "Email: $email <br/> Password: $password";
}
// manage register
if (isset($_POST["register"])) {
    $email = getInput("email");
    $password = getInput("password");
    $birth= getInput("birth");
    $name = getInput("name");
    if($name!= false AND $email != false){
        echo "Email: $email <br/> Password: $password <br/> Birthday: $birth <br/> Name: $name <br/>";
    }
// DATE DIFFERENCE (recup interval cad age du user)
$origin = date_create($birth);
$target = date_create();
$interval = date_diff($origin, $target);
$age = $interval->format('%y');

// deleting a cookie:
// SETTING A COOKIE :
// setcookie(name, value, expiry, path, domain, security);
    setcookie('age', $age, time() + (60 * 60 * 24 * 30));

// store user data in the session
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["birth"] = $birth;
    $_SESSION["logged"] = false;

    // redirect to login page
    header("location:./login.php");

}

// logout
if(isset($_GET["logout"])){
    $_SESSION["logged"] = false;
    header('location:./index.php');
}

?>