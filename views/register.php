<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription ShopEsa</title>
    <link rel="stylesheet" href="../public/css/register.css">
</head>

<body>

    <div class="form-container">

        <div class="logo">Shop<span>Esa</span></div>
        <div class="subtitle">Créer votre compte</div>

        <form id="form-register">

            <div class="input-group">
                <label>Nom complet</label>
                <input type="text" name="nom" placeholder="Entrez votre nom complet" required>
            </div>

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Entrez votre email" required>
            </div>

            <div class="input-group">
                <label>Téléphone</label>
                <input type="tel" name="tel" placeholder="Entrez votre numéro" required>
            </div>

            <div class="input-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="Créez un mot de passe" required>
            </div>

            <div class="input-group">
                <label>Confirmer mot de passe</label>
                <input type="password" name="confirm_password" placeholder="Confirmez le mot de passe" required>
            </div>

            <button type="submit" class="btn">S'inscrire</button>

            <div class="footer">
                <p>Vous avez déjà un compte ?</p>
                <a href="./login.php">Se connecter</a>
            </div>
            

        </form>

    </div>

    <script src="../public/js/register.js"></script>

</body>

</html>