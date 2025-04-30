<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestaurantPro - Nouvelle Commande</title>
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
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .order-form {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            padding: 2rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .menu-items {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            margin-bottom: 2rem;
            max-height: 400px;
            overflow-y: auto;
        }

        .menu-category {
            background: #f8f9fa;
            padding: 1rem;
            font-weight: 600;
            color: #2c3e50;
            border-bottom: 1px solid #e0e0e0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #e0e0e0;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .item-info {
            flex: 1;
        }

        .item-name {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .item-price {
            color: #666;
            font-size: 0.9rem;
        }

        .item-quantity {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .quantity-btn {
            background: #e0e0e0;
            border: none;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            background: #d0d0d0;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
            padding: 0.25rem;
        }

        .order-summary {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .summary-title {
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .total {
            font-weight: 600;
            color: #2c3e50;
            border-top: 2px solid #e0e0e0;
            padding-top: 1rem;
            margin-top: 1rem;
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
        <div class="order-form">
            <div class="form-header">
                <h1>Nouvelle Commande</h1>
            </div>

            <form action="process_order.php" method="POST">
                <div class="menu-items">
                    <div class="menu-category">Entrées</div>
                    <div class="menu-item">
                        <div class="item-info">
                            <select name="entree" class="item-select" style="border: none; font-size: 16px; width: 100%; padding: 8px; outline: none; background: transparent;">
                                <option value="">Sélectionnez une entrée</option>
                                <option value="salade_cesar">Salade César - 8.99 €</option>
                                <option value="soupe">Soupe à l'oignon - 7.99 €</option>
                                <option value="carpaccio">Carpaccio de Boeuf - 9.99 €</option>
                                <option value="foie_gras">Foie Gras - 12.99 €</option>
                            </select>
                        </div>
                        <div class="item-quantity">
                            <button type="button" class="quantity-btn">-</button>
                            <input type="number" class="quantity-input" value="0" min="0">
                            <button type="button" class="quantity-btn">+</button>
                        </div>
                    </div>

                    <div class="menu-category">Plats Principaux</div>
                    <div class="menu-item">
                        <div class="item-info">
                            <select name="plat" class="item-select" style="border: none; font-size: 16px; width: 100%; padding: 8px; outline: none; background: transparent;">
                                <option value="">Sélectionnez un plat principal</option>
                                <option value="steak_frites">Steak Frites - 24.99 €</option>
                                <option value="poulet_roti">Poulet Rôti - 18.99 €</option>
                                <option value="saumon">Saumon Grillé - 22.99 €</option>
                                <option value="risotto">Risotto aux Champignons - 16.99 €</option>
                                <option value="burger">Burger Gourmet - 19.99 €</option>
                            </select>
                        </div>
                        <div class="item-quantity">
                            <button type="button" class="quantity-btn">-</button>
                            <input type="number" class="quantity-input" value="0" min="0">
                            <button type="button" class="quantity-btn">+</button>
                        </div>
                    </div>

                    <div class="menu-category">Desserts</div>
                    <div class="menu-item">
                        <div class="item-info">
                            <select name="dessert" class="item-select" style="border: none; font-size: 16px; width: 100%; padding: 8px; outline: none; background: transparent;">
                                <option value="">Sélectionnez un dessert</option>
                                <option value="creme_brulee">Crème Brûlée - 7.99 €</option>
                                <option value="tiramisu">Tiramisu - 8.99 €</option>
                                <option value="mousse">Mousse au Chocolat - 6.99 €</option>
                                <option value="tarte">Tarte Tatin - 7.99 €</option>
                                <option value="profiteroles">Profiteroles - 8.99 €</option>
                            </select>
                        </div>
                        <div class="item-quantity">
                            <button type="button" class="quantity-btn">-</button>
                            <input type="number" class="quantity-input" value="0" min="0">
                            <button type="button" class="quantity-btn">+</button>
                        </div>
                    </div>
                </div>

                <div class="order-summary">
                    <div class="summary-title">Résumé de la commande</div>
                    <div class="summary-item">
                        <span>Sous-total</span>
                        <span>0.00 €</span>
                    </div>
                    <div class="summary-item">
                        <span>TVA (10%)</span>
                        <span>0.00 €</span>
                    </div>
                    <div class="summary-item total">
                        <span>Total</span>
                        <span>0.00 €</span>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="lucide-check"></i>
                        Valider la commande
                    </button>
                    <a href="commande.php" class="btn btn-secondary">
                        <i class="lucide-x"></i>
                        Annuler
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('.quantity-input');
                if (this.textContent === '+') {
                    input.value = parseInt(input.value) + 1;
                } else if (this.textContent === '-' && input.value > 0) {
                    input.value = parseInt(input.value) - 1;
                }
                updateTotal();
            });
        });

        function updateTotal() {
            // Add JavaScript to calculate totals
            // This is a placeholder for the calculation logic
        }
    </script>
</body>
</html>