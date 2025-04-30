<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestaurantPro - Personnel</title>
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

        .staff-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .add-staff-btn {
            background-color: #4CAF50;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            border: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-staff-btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        .staff-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .staff-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .staff-card:hover {
            transform: translateY(-5px);
        }

        .staff-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .staff-info {
            padding: 1.5rem;
        }

        .staff-name {
            font-size: 1.25rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .staff-role {
            color: #3498db;
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .staff-details {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .staff-contact {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .staff-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #eee;
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
            flex: 1;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .btn-edit {
            background-color: #3498db;
            color: white;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        .btn:hover {
            opacity: 0.9;
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
                <a href="../commande/commande.php" class="nav-link">
                    <i class="lucide-clipboard-list"></i>
                    <span>Commandes</span>
                </a>
                <a href="personnel.php" class="nav-link active">
                    <i class="lucide-users"></i>
                    <span>Personnel</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="staff-header">
            <h1>Gestion du Personnel</h1>
           
            <a href="Ajoutstaff.php" class="add-staff-btn">
                <i class="lucide-user-plus"></i>
                Ajouter un employé
            </a>
        </div>

        <div class="staff-grid">
            <div class="staff-card">
                <div class="staff-info">
                    <div class="staff-name">ALABA mic</div>
                    <div class="staff-role">Chef Cuisinier</div>
                    <div class="staff-details">
                        <div class="staff-contact">
                            <i class="lucide-mail"></i>
                            mic.durant@restaurant.com
                        </div>
                        <div class="staff-contact">
                            <i class="lucide-phone"></i>
                            +228 71608097
                        </div>
                    </div>
                    <div class="staff-actions">
                        <button class="btn btn-edit">
                            <i class="lucide-edit"></i>
                            Modifier
                        </button>
                        <button class="btn btn-delete">
                            <i class="lucide-trash-2"></i>
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-info">
                    <div class="staff-name">MAKPASSIM Sophie</div>
                    <div class="staff-role">Serveuse</div>
                    <div class="staff-details">
                        <div class="staff-contact">
                            <i class="lucide-mail"></i>
                            sophie.ma@restaurant.com
                        </div>
                        <div class="staff-contact">
                            <i class="lucide-phone"></i>
                            +228 96257589
                        </div>
                    </div>
                    <div class="staff-actions">
                        <button class="btn btn-edit">
                            <i class="lucide-edit"></i>
                            Modifier
                        </button>
                        <button class="btn btn-delete">
                            <i class="lucide-trash-2"></i>
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>

            <div class="staff-card">
                <div class="staff-info">
                    <div class="staff-name">DEKOUA bienvenu</div>
                    <div class="staff-role">Manager</div>
                    <div class="staff-details">
                        <div class="staff-contact">
                            <i class="lucide-mail"></i>
                            bien.dek@restaurant.com
                        </div>
                        <div class="staff-contact">
                            <i class="lucide-phone"></i>
                            +228 90076545
                        </div>
                    </div>
                    <div class="staff-actions">
                        <button class="btn btn-edit">
                            <i class="lucide-edit"></i>
                            Modifier
                        </button>
                        <button class="btn btn-delete">
                            <i class="lucide-trash-2"></i>
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>