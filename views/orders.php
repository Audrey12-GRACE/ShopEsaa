<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes commandes - ShopEsa</title>
    <link rel="stylesheet" href="../public/css/home.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="logo-name">ShopEsa</div>
            <div class="logo-sub">Commandes</div>
        </div>

        <nav class="nav-links">
            <a href="home.php">Accueil</a>
            <a href="product.php">Boutique</a>
            <a href="cart.php">Panier</a>
            <a class="active" href="orders.php">Mes commandes</a>
            <a href="logout.php">Déconnexion</a>
        </nav>
    </header>

    <main>
        <section class="section-overview">
            <div class="section-title">Historique des commandes</div>
            <p class="section-sub">Suivez vos achats récents et consultez les détails de chaque commande.</p>

            <div class="dashboard">
                <div class="card">
                    <h3>Aucune commande</h3>
                    <p>Vos commandes récentes apparaîtront ici une fois passées.</p>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="feature-card">
                <h4>Suivi de commande</h4>
                <p>Voir l’état actuel de la livraison et la date estimée d’arrivée.</p>
            </div>
            <div class="feature-card">
                <h4>Historique clair</h4>
                <p>Retrouvez facilement les informations de vos anciennes commandes.</p>
            </div>
            <div class="feature-card">
                <h4>Support client</h4>
                <p>Des questions sur une commande ? Contactez-nous pour obtenir de l’aide.</p>
            </div>
        </section>
    </main>
</body>

</html>