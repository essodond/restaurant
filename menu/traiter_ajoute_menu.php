<?php
require_once 'db.php';
require_once 'menu.class.php';

$menu = new Menu($connexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $categorie = $_POST['categorie'] ?? '';
    $prix = $_POST['prix'] ?? '';
    $description = $_POST['description'] ?? ''; // non utilisé pour l'instant
    $image = $_FILES['image'] ?? null;

    // Debugging pour vérifier la catégorie
    var_dump($categorie); // Affiche la valeur reçue pour la catégorie
    

    if ($image && $image['error'] === UPLOAD_ERR_OK) {
        $nomFichier = basename($image['name']);
        move_uploaded_file($image['tmp_name'], '../images/' . $nomFichier);
    }

    $categoriesValides = ['Entrées', 'Plat Principaux', 'Dessert', 'Boisson'];
    if (!in_array($categorie, $categoriesValides)) {
        echo "❌ Catégorie invalide.";
        exit;
    }

    if (!empty($nom) && !empty($prix)) {
        $menu->ajouterPlat($nom, $prix, $categorie);
        header("Location: menu.php?success=1");
        exit;
    } else {
        echo "❌ Tous les champs requis ne sont pas remplis.";
    }
}
