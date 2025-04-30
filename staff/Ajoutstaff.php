<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestaurantPro - Ajouter un Employé</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/lucide-icons/dist/umd/lucide.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .form-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            padding: 2rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            color: #2c3e50;
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2c3e50;
            font-weight: 500;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
            outline: none;
        }

        .photo-upload {
            border: 2px dashed #3498db;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .photo-upload:hover {
            background-color: rgba(52, 152, 219, 0.1);
        }

        .photo-upload i {
            font-size: 2rem;
            color: #3498db;
            margin-bottom: 1rem;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            grid-column: 1 / -1;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background-color: #3498db;
            color: white;
            flex: 1;
        }

        .btn-secondary {
            background-color: #e0e0e0;
            color: #2c3e50;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
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
        <div class="form-card">
            <div class="form-header">
                <h1>Ajouter un Nouvel Employé</h1>
            </div>

            <form action="process_staff.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="firstname" required>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" id="lastname" name="lastname" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label for="role">Poste</label>
                        <select id="role" name="role" required>
                            <option value="">Sélectionnez un poste</option>
                            <option value="chef">Chef Cuisinier</option>
                            <option value="sous-chef">Sous-Chef</option>
                            <option value="serveur">Serveur/Serveuse</option>
                            <option value="manager">Manager</option>
                            <option value="barman">Barman/Barmaid</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="start_date">Date de début</label>
                        <input type="date" id="start_date" name="start_date" required>
                    </div>

                    

                    <div class="form-group full-width">
                        <label for="notes">Notes additionnelles</label>
                        <textarea id="notes" name="notes" rows="4"></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <i class="lucide-user-plus"></i>
                            Ajouter l'employé
                        </button>
                        <a href="personnel.php" class="btn btn-secondary">
                            <i class="lucide-x"></i>
                            Annuler
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>