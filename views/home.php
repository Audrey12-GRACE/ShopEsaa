<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ShopEsa</title>
    <link rel="stylesheet" href="../public/css/home.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="logo-name">ShopEsa</div>
            <div class="logo-sub">Bienvenue</div>
        </div>

        <nav class="nav-links">
            <a class="active" href="home.php">Accueil</a>
            <a href="product.php">Boutique</a>
            <a href="cart.php">Panier</a>
            <a href="orders.php">Mes commandes</a>
            <a href="logout.php">Déconnexion</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Tableau de bord</span>
                <h1>Bienvenue sur ShopEsa</h1>
                <p>Retrouvez un aperçu clair de vos commandes, de vos produits consultés et de votre panier. Commencez à explorer la boutique pour dénicher les meilleures offres.</p>
                <div class="hero-actions">
                    <a class="button primary" href="product.php">Voir la boutique</a>
                    <a class="button secondary" href="cart.php">Consulter mon panier</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-card">
                    <div class="hero-card-header">
                        <span>Vos statistiques</span>
                        <strong>À venir</strong>
                    </div>
                    <div class="hero-card-body">
                        <div class="hero-stat">
                            <strong>—</strong>
                            <span>Produits vus</span>
                        </div>
                        <div class="hero-stat">
                            <strong>—</strong>
                            <span>Articles dans le panier</span>
                        </div>
                        <div class="hero-stat">
                            <strong>—</strong>
                            <span>Commandes</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-overview">
            <div class="section-title">Votre espace</div>
            <p class="section-sub">Un aperçu rapide pour continuer vos achats ou suivre vos activités récentes.</p>

            <div class="dashboard">
                <div class="card">
                    <h3>Dernière commande</h3>
                    <p>Aucune commande pour le moment</p>
                </div>
                <div class="card">
                    <h3>Produits vus</h3>
                    <p>0 produit consulté</p>
                </div>
                <div class="card">
                    <h3>Panier</h3>
                    <p>0 article</p>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="feature-card">
                <h4>Offres personnalisées</h4>
                <p>Découvrez les promotions mises en avant pour vous dès maintenant.</p>
            </div>
            <div class="feature-card">
                <h4>Livraison rapide</h4>
                <p>Suivez vos commandes et profitez d’une livraison fiable sur tous vos achats.</p>
            </div>
            <div class="feature-card">
                <h4>Assistance disponible</h4>
                <p>Besoin d’aide ? Notre support est prêt à répondre à toutes vos questions.</p>
            </div>
        </section>
    </main>
</body>

</html>