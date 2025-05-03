<?php
require_once 'db.php';
require_once 'menu.class.php';

$menu = new Menu($connexion);

if (!isset($_GET['id'])) {
    die("ID du plat non spécifié.");
}

$plat = $menu->getPlatParId($_GET['id']); // Méthode à créer dans Menu.php

if (!$plat) {
    die("Plat non trouvé.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modifier un menu</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Modifier le plat : <?= htmlspecialchars($plat['nom_plat']) ?></h1>

    <form action="traiter_modifier_menu.php" method="POST">
        <input type="hidden" name="id" value="<?= $plat['id'] ?>">

        <label>Nom du plat :</label>
        <input type="text" name="nom_plat" value="<?= htmlspecialchars($plat['nom_plat']) ?>" required><br>

        <label>Prix :</label>
        <input type="number" name="prix" value="<?= $plat['prix'] ?>" step="0.01" required><br>

        <label>Catégorie :</label>
        <select name="categorie" required>
            <option value="entrée" <?= $plat['categorie'] == 'entrée' ? 'selected' : '' ?>>Entrée</option>
            <option value="plat" <?= $plat['categorie'] == 'plat' ? 'selected' : '' ?>>Plat</option>
            <option value="dessert" <?= $plat['categorie'] == 'dessert' ? 'selected' : '' ?>>Dessert</option>
            <option value="boisson" <?= $plat['categorie'] == 'boisson' ? 'selected' : '' ?>>Boisson</option>
        </select><br>

        <button type="submit">Enregistrer les modifications</button>
    </form>
</body>
</html>
