<?php
require_once 'db.php'; // ceci va inclure ton fichier de connexion
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta nom="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestaurantPro - Ajouter un Menu</title>
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

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .form-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            padding: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            color: #2c3e50;
            font-weight: 500;
            margin-bottom: 0.5rem;
            display: block;
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

        .form-group textarea {
            min-height: 120px;
            resize: vertical;
        }

        .image-upload {
            border: 2px dashed #3498db;
            border-radius: 8px;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .image-upload:hover {
            background-color: rgba(52, 152, 219, 0.1);
        }

        .image-upload i {
            font-size: 2rem;
            color: #3498db;
            margin-bottom: 1rem;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
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

        .btn-primary:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-secondary:hover {
            background-color: #bdc3c7;
            transform: translateY(-2px);
        }

        .price-input {
            position: relative;
        }

        .price-input::before {
            content: '€';
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
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
                <a href="menu.php" class="nav-link active">
                    <i class="lucide-menu"></i>
                    <span>Menu</span>
                </a>
                <a href="../commande/commande.php" class="nav-link">
                    <i class="lucide-clipboard-list"></i>
                    <span>Commandes</span>
                </a>
                <a href="/staff" class="nav-link">
                    <i class="lucide-users"></i>
                    <span>Personnel</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="form-header">
            <h1>Ajouter un Nouveau Plat</h1>
        </div>

        <div class="form-card">
            <form action="traiter_ajoute_menu.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nom du Plat</label>
                    <input type="text" id="name" name="nom" required placeholder="Ex: Coq au Vin">
                </div>

                <div class="form-group">
                    <label for="categorie">Catégorie</label>
                    <select id="categorie" name="categorie" required>
                        <option value="">Sélectionnez une catégorie</option>
                        <option value="entrees">Entrées</option>
                        <option value="plat">Plats Principaux</option>
                        <option value="desserts">Desserts</option>
                        <option value="boissons">Boissons</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">Prix</label>
                    <div class="price-input">
                        <input type="number" id="prix" name="prix"  required placeholder="0.00">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required 
                        placeholder="Décrivez les ingrédients et la préparation..."></textarea>
                </div> 

                <div class="form-group">
                    <label for="image">Image du Plat</label>
                    <div class="image-upload" onclick="document.getElementById('image').click()">
                        <i class="lucide-image-plus"></i>
                        <p>Cliquez ou glissez une image ici</p>
                        <input type="file" id="image" name="image" accept="../image/*" style="display: none" required>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Ajouter au Menu</button>
                    <a href="menu.php" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>