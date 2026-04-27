
$r=$_SESSION["id_user"]? $panier->rowCount():0;
                    echo $r;
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion ShopEsa</title>
    <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>

    <div class="form-container">

        <div class="logo">Shop<span>Esa</span></div>
        <div class="subtitle">Connectez-vous à votre compte</div>

        <form action="" method="POST">

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Entrez votre email" required>
            </div>

            <div class="input-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>

            <div class="options">
                <label><input type="checkbox"> Se souvenir</label>
                <a href="#">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="btn">Se connecter</button>

            <div class="footer">
                vous n'avez pas encore de compte ?
                <a href="./register.php">Créer un compte</a>
            </div>

        </form>

    </div>

</body>

</html>