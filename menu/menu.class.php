<?php
class Menu {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Ajouter un plat
    // Ajouter un plat
    public function ajouterPlat($nom_plat, $prix, $categorie = 'plat', $image = '') {
        $sql = "INSERT INTO menu (nom_plat, prix, categorie, image) VALUES (:nom_plat, :prix, :categorie, :image)";
        $req = $this->pdo->prepare($sql);
        return $req->execute([
            ':nom_plat' => $nom_plat,
            ':prix' => $prix,
            ':categorie' => $categorie,
            ':image' => $image
        ]);
    }

    // Lister tous les plats
    public function getTousLesPlats() {
        $sql = "SELECT * FROM menu ORDER BY id DESC";
        $req = $this->pdo->query($sql);
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    // Supprimer un plat
    public function supprimerPlat($id) {
        $sql = "DELETE FROM menu WHERE id = :id";
        $req = $this->pdo->prepare($sql);
        return $req->execute([':id' => $id]);
    }
}
?>
