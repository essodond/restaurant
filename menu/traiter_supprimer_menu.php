<?php
include_once 'db.php';
include_once 'menu.class.php';
$menu = new Menu($connexion); // Injecte la connexion dans la classe
$plats = $menu->getTousLesPlats(); // Récupère les plats
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($menu->supprimerPlat($id)) {
        echo "<script>alert('Plat supprimé avec succès !');</script>";
    } else {
        echo "<script>alert('Erreur lors de la suppression du plat.');</script>";
    }
}
$plats = $menu->getTousLesPlats(); // Récupère les plats après suppression
//rediriger vers la page menu.php
header("Location: menu.php");
exit();
?>