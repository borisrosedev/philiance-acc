<?php
session_start();
require './php/controllers/user.php';

if(isset($_SESSION['user'])){
    header("Location: http://localhost:3000/app/session.php");
}

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://kit.fontawesome.com/160b20183a.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    <?php
        include './components/header.php';
    ?>
    <main class="login-page">
        <form  action="" method="post" class="login-form">
            <section class="login-form-inputs">
                <input type="text" name="email" placeholder="Email"/>
                <input type="text" name="password" placeholder="Password" pattern="[a-z,A-Z]{6,12}"/>
            </section>
            <section>
                <button type="submit"> Connexion </button>
            </section>
        </form>
    </main>   
</body>
</html>