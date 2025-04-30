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
            Add Menu Item
        </a>
    </div>

    <div class="menu-list">
        <div class="menu-item">
            <div class="menu-image">
                <img src="../images/pasta.jpg" alt="Pasta Carbonara">
            </div>
            <div class="menu-info">
                <h3>Pasta Carbonara</h3>
                <p>Classic Italian pasta with eggs and bacon</p>
                <span class="category">Main Course</span>
                <span class="price">1500 FCFA</span>
            </div>
            <div class="menu-actions">
                <button class="edit-btn"><i class="lucide-edit"></i></button>
                <button class="delete-btn"><i class="lucide-trash-2"></i></button>
            </div>
        </div>

        <div class="menu-item">
            <div class="menu-image">
                <img src="../images/salade.jpg" alt="Caesar Salad">
            </div>
            <div class="menu-info">
                <h3>Caesar Salad</h3>
                <p>Fresh romaine lettuce with Caesar dressing and croutons</p>
                <span class="category">Starters</span>
                <span class="price">1200 FCFA</span>
            </div>
            <div class="menu-actions">
                <button class="edit-btn"><i class="lucide-edit"></i></button>
                <button class="delete-btn"><i class="lucide-trash-2"></i></button>
            </div>
        </div>

        <div class="menu-item">
            <div class="menu-image">
                <img src="../images/chocolat.jpg" alt="Chocolate Lava Cake">
            </div>
            <div class="menu-info">
                <h3>Chocolate Lava Cake</h3>
                <p>Warm chocolate cake with molten center</p>
                <span class="category">Desserts</span>
                <span class="price">600 FCFA</span>
            </div>
            <div class="menu-actions">
                <button class="edit-btn"><i class="lucide-edit"></i></button>
                <button class="delete-btn"><i class="lucide-trash-2"></i></button>
            </div>
        </div>
    </div>
   
</div>
</body>
</body>
</html>
