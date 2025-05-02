
<?php
require_once 'db.php';            // Charge la variable $connexion
require_once 'menu.class.php';   // Charge la classe Menu

$menu = new Menu($connexion);    // Injecte la connexion dans la classe
$plats = $menu->getTousLesPlats(); // Récupère les plats
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestaurantPro - menu</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/lucide-icons/dist/umd/lucide.css">

</head>
<body>
       <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <i class="lucide-utensils"></i>
                <span>RestaurantPro</span>
            </div>
            
            <div class="nav-links" id="navLinks">
                
                </a>
                <a href="/menu" class="nav-link active">
                    <i class="lucide-menu"></i>
                    <span>Menu</span>
                </a>
                <a href="../commande/commande.php" class="nav-link">
                    <i class="lucide-clipboard-list"></i>
                    <span>Commandes</span>
                </a>

                <a href="../staff/personnel.php" class="nav-link">
                    <i class="lucide-users"></i>
                    <span>Personnel</span>
                </a>
                
                
            </div>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="lucide-menu"></i>
            </button>
        </div>
    </nav>

    </nav>

<div class="container">
    <div class="header-actions">
        <h1>Menu Management</h1>
        <a href="AjoutMenu.php" class="add-btn">
            <i class="lucide-plus"></i>
            Ajouter un menu
        </a>
    </div>

   

        <div class="menu-list">
            <?php foreach ($plats as $plat): ?>
        <div class="menu-item">
        <div class="menu-image">
            <img src="../images/placeholder.jpg" alt="<?= htmlspecialchars($plat['nom_plat']) ?>">
        </div>
        <div class="menu-info">
            <h3><?= htmlspecialchars($plat['nom_plat']) ?></h3>
            <p><?= htmlspecialchars($plat['categorie']) ?></p>
            <span class="category"><?= htmlspecialchars($plat['categorie']) ?></span>
            <span class="price"><?= number_format($plat['prix'], 0, ',', ' ') ?> FCFA</span>
        </div>
        <div class="menu-actions">
            <button class="edit-btn"><i class="lucide-edit"></i></button>
            <button class="delete-btn"><i class="lucide-trash-2"></i></button>
        </div>
</div>
<?php endforeach; ?>
</div>
   
</div>
</body>
</body>
</html>
