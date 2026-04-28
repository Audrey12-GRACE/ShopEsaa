<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier - ShopEsa</title>
    <link rel="stylesheet" href="../public/css/home.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <div class="logo-name">ShopEsa</div>
            <div class="logo-sub">Panier</div>
        </div>

        <nav class="nav-links">
            <a href="home.php">Accueil</a>
            <a href="product.php">Boutique</a>
            <a class="active" href="cart.php">Panier</a>
            <a href="orders.php">Mes commandes</a>
            <a href="logout.php">Déconnexion</a>
        </nav>
    </header>

    <main>
        <section class="section-overview">
            <div class="section-title">Votre panier</div>
            <p class="section-sub">Vérifiez vos articles avant de passer à la caisse. Ajoutez, modifiez ou supprimez des produits facilement.</p>

            <div id="cart-content" class="cart-content"></div>
        </section>

        <section class="features">
            <div class="feature-card">
                <h4>Prêt pour paiement</h4>
                <p>Validez votre panier dès que vous êtes prêt. Livraison rapide disponible.</p>
            </div>
            <div class="feature-card">
                <h4>Modifier votre panier</h4>
                <p>Supprimez des articles ou ajustez les quantités avant de finaliser.</p>
            </div>
            <div class="feature-card">
                <h4>Assistance</h4>
                <p>Besoin d’aide ? Contactez notre service client pour un support rapide.</p>
            </div>
        </section>
    </main>
    <script src="../public/js/cart-storage.js"></script>
</body>

</html>