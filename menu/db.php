<?php
$host = 'localhost';
$dbname = 'restaurant_db'; 
$user = 'root';        
<<<<<<< HEAD
$pass = '';             
=======
$pass = '99731514';             
>>>>>>> dece257 (mis en place des pages de modification au niveau du menu)

try {
    $connexion = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // echo "Connexion réussie !";
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
