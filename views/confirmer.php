<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmer votre compte</title>
</head>
<body>
    <div class="contener">
        <p>
            Un code de confirmation vous a été envoyer par mail veuillez le saisir içi !
        </p>
        <form id="form-confirmer" >
            <label for="code">Le code</label>
            <input type="number" name="code" id="code" placeholder="saisir le code" >
            <button type="submit" name="btn-con">Valider</button>
            <button type="reset">Annuler</button>
        </form>
        <div class="option">
            <p>
                Vous avez pas réçu de code ? 
            </p>
            <button type="button" id="btn-reessayer" >Réessayer</button>
        </div>
    </div>

    <script src="../public/js/confirmer.js"></script>
</body>
</html>