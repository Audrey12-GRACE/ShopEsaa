<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Déconnexion - ShopEsa</title>
    <link rel="stylesheet" href="../public/css/home.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="logo-name">ShopEsa</div>
            <div class="logo-sub">Déconnexion</div>
        </div>

        <nav class="nav-links">
            <a href="home.php">Accueil</a>
            <a href="product.php">Boutique</a>
            <a href="cart.php">Panier</a>
            <a href="orders.php">Mes commandes</a>
            <a class="active" href="logout.php">Déconnexion</a>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-copy">
                <span class="eyebrow">Déconnecté</span>
                <h1>Vous êtes bien déconnecté</h1>
                <p>Merci d’avoir visité ShopEsa. Revenez bientôt pour découvrir les nouveautés et finaliser vos achats.</p>
                <div class="hero-actions">
                    <a class="button primary" href="home.php">Retour à l’accueil</a>
                    <a class="button secondary" href="login.php">Se reconnecter</a>
                </div>
            </div>
            <div class="hero-visual">
                <div class="hero-card">
                    <div class="hero-card-header">
                        <span>Session terminée</span>
                        <strong>À bientôt !</strong>
                    </div>
                    <div class="hero-card-body">
                        <div class="hero-stat">
                            <strong>—</strong>
                            <span>Session fermée</span>
                        </div>
                        <div class="hero-stat">
                            <strong>—</strong>
                            <span>Retour à l’accueil</span>
                        </div>
                        <div class="hero-stat">
                            <strong>—</strong>
                            <span>Connexion requise</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>