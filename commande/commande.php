<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestaurantPro - Commandes</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/lucide-icons/dist/umd/lucide.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .orders-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .orders-list {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .order-info {
            flex: 1;
        }

        .order-number {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .order-details {
            color: #666;
            font-size: 0.9rem;
        }

        .order-status {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
            margin: 0 1rem;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-preparing {
            background-color: #cce5ff;
            color: #004085;
        }

        .status-ready {
            background-color: #d4edda;
            color: #155724;
        }

        .order-actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }

        .btn-view {
            background-color: #e0e0e0;
            color: #333;
        }

        .btn-validate {
            background-color: #4CAF50;
            color: white;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <i class="lucide-utensils"></i>
                <span>RestaurantPro</span>
            </div>
            
            <div class="nav-links">
                <a href="../menu/menu.php" class="nav-link">
                    <i class="lucide-menu"></i>
                    <span>Menu</span>
                </a>
                <a href="commande.php" class="nav-link active">
                    <i class="lucide-clipboard-list"></i>
                    <span>Commandes</span>
                </a>
                <a href="../staff/personnel.php" class="nav-link">
                    <i class="lucide-users"></i>
                    <span>Personnel</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="orders-header">
            <h1>Gestion des Commandes</h1>
            <a href="AjoutCommande.php" class="btn btn-validate" style="text-decoration: none;">
                <i class="lucide-plus"></i>
                Ajouter une commande
            </a>
        </div>



        <div class="orders-list">
            <div class="order-item">
                <div class="order-info">
                    <div class="order-number">Commande #1234</div>
                    <div class="order-details">
                        2 × Pasta Carbonara<br>
                        1 × Caesar Salad
                    </div>
                </div>
                <span class="order-status status-pending">En attente</span>
                <div class="order-actions">
                    <button class="btn btn-view">
                        <i class="lucide-eye"></i>
                        Voir
                    </button>
                    <button class="btn btn-validate">
                        <i class="lucide-check"></i>
                        Valider
                    </button>
                    <button class="btn btn-delete">
                        <i class="lucide-trash-2"></i>
                        Supprimer
                    </button>
                </div>
            </div>

            <div class="order-item">
                <div class="order-info">
                    <div class="order-number">Commande #1235</div>
                    <div class="order-details">
                        1 × Steak Frites<br>
                        2 × Crème Brûlée
                    </div>
                </div>
                <span class="order-status status-preparing">En préparation</span>
                <div class="order-actions">
                    <button class="btn btn-view">
                        <i class="lucide-eye"></i>
                        Voir
                    </button>
                    <button class="btn btn-validate">
                        <i class="lucide-check"></i>
                        Valider
                    </button>
                    <button class="btn btn-delete">
                        <i class="lucide-trash-2"></i>
                        Supprimer
                    </button>
                </div>
            </div>

            <div class="order-item">
                <div class="order-info">
                    <div class="order-number">Commande #1236</div>
                    <div class="order-details">
                        3 × Chocolate Lava Cake<br>
                        4 × Café
                    </div>
                </div>
                <span class="order-status status-ready">Prêt</span>
                <div class="order-actions">
                    <button class="btn btn-view">
                        <i class="lucide-eye"></i>
                        Voir
                    </button>
                    <button class="btn btn-validate">
                        <i class="lucide-check"></i>
                        Valider
                    </button>
                    <button class="btn btn-delete">
                        <i class="lucide-trash-2"></i>
                        Supprimer
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>