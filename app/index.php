<?php
session_start();
require './php/controllers/user.php';

if($_SESSION['user']){
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
<body>
    <?php
        include './components/header.php';
    ?>
    <main class="login-page">
        <form action="" method="post" class="login-form">
            <section class="login-form-inputs">
                <input type="email" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="Password"/>
            </section>
            <section>
                <button type="submit"> Connexion </button>
            </section>
        </form>
    </main>   
</body>
</html>