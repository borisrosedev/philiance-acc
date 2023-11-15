<?php
require './php/connection.php';


if(isset($_POST['email']) && isset($_POST['password'])){
    // $email = htmlspecialchars($_POST['email']);
    // $password = htmlspecialchars($_POST['password']);
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Utilisez la connexion PDO ici
    try {
        // $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        // $stmt->execute([$email, $password]);
        $query = "SELECT email, firstname, lastname, password, id FROM users WHERE email = '$email' AND password = '$password'";
        $stmt = $pdo->query($query);

        // Traitez les résultats de la requête
        // ...
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user){
            // Stocker les informations de l'utilisateur dans la session
            $_SESSION['user'] = $user;

            // Redirection après traitement
            header("Location: http://localhost:3000/app/index.php");
            exit();
        } 
        
        // else {
        //     // Aucun utilisateur correspondant trouvé, gestion de l'erreur ou redirection
        //     header("Location: http://localhost:3000/app/error.php");
        //     exit();
        // }

    } catch (PDOException $e) {
        // Gérez les erreurs de la requête SQL
        echo "Erreur : " . $e->getMessage();
    }
} 
?>
