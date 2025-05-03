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

    // ... existing code ...

    if ($image && $image['error'] === UPLOAD_ERR_OK) {
        //kazalo
        
        // Keep original filename and extension
        $nomFichier = basename($image['name']);
        $cheminDestination = '../images/' . $nomFichier;
        
        if (move_uploaded_file($image['tmp_name'], $cheminDestination)) {
            if (!empty($nom) && !empty($prix)) {
                $menu->ajouterPlat($nom, $prix, $categorie, $nomFichier);
                header("Location: menu.php?success=1");
                exit;
            }
        }
    }

    // ... existing code ...

    // Define valid categories with their database values
    $categoriesValides = [
        'entree' => 'entree',
        'plat' => 'plat',
        'dessert' => 'dessert',
        'boisson' => 'boisson'
    ];
    
    // Normalize the input category to lowercase without accents
    $categorieNormalisee = strtolower(trim($categorie));
    
    if (!array_key_exists($categorieNormalisee, $categoriesValides)) {
        // Return error message and stop execution if category is invalid
        echo "❌ Catégorie invalide.";
        exit;
    }
    
    // Use the normalized category value for database storage
    $categorie = $categoriesValides[$categorieNormalisee];

    if (!empty($nom) && !empty($prix)) {
        $menu->ajouterPlat($nom, $prix, $categorie, $nomFichier);
        header("Location: menu.php?success=1");
        exit;
    } else {
        echo "❌ Tous les champs requis ne sont pas remplis.";
    }
}
