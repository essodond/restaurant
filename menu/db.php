<?php
$host = 'localhost';
$dbname = 'restaurant_db'; 
$user = 'root';        
$pass = '99731514';             

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // echo "Connexion réussie !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
