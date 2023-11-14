<?php
// Informations de connexion à la base de données
$host = 'localhost:3306';
$dbname = 'shop';
$user = 'boris';
$pass = 'boris';

// Chaîne de connexion PDO
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

// Options de connexion
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// Tentative de connexion
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
?>