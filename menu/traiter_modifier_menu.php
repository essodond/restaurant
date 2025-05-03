<?php
require_once 'db.php';
require_once 'menu.class.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $nom_plat = $_POST['nom_plat'];
    $prix = $_POST['prix'];
    $categorie = $_POST['categorie'];

    $menu = new Menu($connexion);
    $menu->modifierPlat($id, $nom_plat, $prix, $categorie);

    header("Location: menu.php");
    exit();
}
