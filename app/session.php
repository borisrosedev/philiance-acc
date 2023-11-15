<?php
session_start();
require './php/controllers/user.php';
require './php/controllers/product.php';

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
    <main class="session-page">

        <h2> Your information </h2>
        <section class="user-infos">
            <?php 
                if(isset($_SESSION['user']) && $_SESSION['user']['id']){
                    ?>
                    <article class="user-info">
                        <p><?= $_SESSION['user']['firstname'] ? $_SESSION['user']['firstname'] : 'Inconnu'; ?></p>
                    </article>
                    <article class="user-info">
                        <p><?= $_SESSION['user']['firstname'] ? $_SESSION['user']['lastname'] : 'Inconnu'; ?></p>
                    </article>
                    <article class="user-info">
                        <p><?= $_SESSION['user']['email'] ?></p>
                    </article>
                    <article class="user-info">
                        <p><?= $_SESSION['user']['password'] ?></p>
                    </article>
                    <?php
                }
            ?>
        </section>

        <h2> Your products </h2>
        <section class="user-products">
        <?php

            if(isset($_SESSION['products'])){
                foreach($_SESSION['products'] as $product){

                    ?>

                        <article class="user-product">
                            <img src=<?= $product['url']?> />
                        </article>

                    <?php

                }
            }

        ?>
        </section>
    
    </main> 
    <script>
    document.getElementById('logout-icon').addEventListener('click', function() {
            console.log('clicked')
            // Effectuer une requête au serveur pour appeler la fonction de déconnexion
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Rediriger vers une page de connexion ou effectuer d'autres actions après la déconnexion
                    window.location.href = 'http://localhost:3000/app/index.php';
                }
            };
            xhr.open('GET', 'http://localhost:3000/app/php/logout.php', true);
            xhr.send();
        });
    </script>
</body>
</html>