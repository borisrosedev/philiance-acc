<?php

if(isset($_SESSION['user'])) {
    $userId = $_SESSION['user']['id'];

    // Utilisez une requête préparée pour éviter les attaques par injection SQL
    $stmt = $pdo->prepare('SELECT * FROM products WHERE user_id = ?');
    $stmt->execute([$userId]);

    $products = [];
    // Traitez les résultats de la requête
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        // Faites quelque chose avec les données du produit
        array_push($products, $row);
    }

    $_SESSION['products'] = $products;
}


?>

