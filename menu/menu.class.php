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

    // Modifier un plat
    public function getPlatParId($id) {
        $sql = "SELECT * FROM menu WHERE id = ?";
        $req = $this->pdo->prepare($sql);
        $req->execute([$id]);
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    // Modifier un plat existant
public function modifierPlat($id, $nom_plat, $prix, $categorie, $image = null) {
    if ($image) {
        $sql = "UPDATE menu SET nom_plat = :nom_plat, prix = :prix, categorie = :categorie, image = :image WHERE id = :id";
        $params = [
            ':nom_plat' => $nom_plat,
            ':prix' => $prix,
            ':categorie' => $categorie,
            ':image' => $image,
            ':id' => $id
        ];
    } else {
        $sql = "UPDATE menu SET nom_plat = :nom_plat, prix = :prix, categorie = :categorie WHERE id = :id";
        $params = [
            ':nom_plat' => $nom_plat,
            ':prix' => $prix,
            ':categorie' => $categorie,
            ':id' => $id
        ];
    }

    $req = $this->pdo->prepare($sql);
    return $req->execute($params);
}

    
}
?>
