<?php
require("../config/db.php");
session_start();
$code = htmlspecialchars($_POST["code"]);

if (!empty($code)) {
    $sel = $conn->prepare("SELECT * FROM users WHERE Code = ? AND Confirmer=?");
    $sel->execute([$code, 0]);
    if ($sel->rowCount() == 1) {
        $upd = $conn->prepare("UPDATE users SET Confirmer=1, Etat='Actif' WHERE Code=? AND Confirmer=? ");
        $upd->execute([$code, 0]);
        echo "success";
    } else {
        echo "Une erreur s'est produite veuillez réessayer !";
    }
} else {
    echo "veuillez entrer le code";
}
