<?php

//use PHPMailer\PHPMailer\PHPMailer;

session_start();
include("../config/db.php");
//require_once("../sendMail.php");
header("Content-Type: application/json");
$pseudo = htmlspecialchars($_POST["nom"]);
$email = htmlspecialchars($_POST["email"]);
$mdp = htmlspecialchars($_POST["password"]);
$tel= htmlspecialchars($_POST["tel"]);
if (!empty($pseudo) && !empty($email) && !empty($mdp) && !empty($tel)) {
    $req_user = $conn->prepare("SELECT * FROM users WHERE Email=?");
    $req_user->execute([$email]);

    if ($req_user->rowCount() > 0) {
        echo json_encode([
            "status" => "faild",
            "mes" => "Vous avez déjà un compte "
        ]);
    } else {
        $code = rand(100000, 999999);
        $content = "
                <p>Bonjour $pseudo</p>
                <p>Votre code de confirmation est :</p>
                <h1>$code </h1>
                ";
        $mdphash = password_hash($mdp, PASSWORD_DEFAULT);
        $insert_user = $conn->prepare("INSERT INTO users(Pseudo, Email, Tel, Code, Confirmer, Etat, Mdp) VALUES(?,?,?,?,?, ?,?)");
        if ($insert_user->execute([$pseudo, $email, $tel, $code, 0, "En attente", $mdphash])) {
            //envoie du email
            /*$mail = new PHPMailer();
            envoiemail($mail, $email, $content, $pseudo);*/
            echo json_encode([
                "status" => "non_confirmer",
                "mes" => "message non envoyer "
            ]);
        } else {
            echo json_encode([
                "status" => "faild",
                "mes" => "Un problème est survenue lors de l'inscription "
            ]);
        }
    }
} else {
    echo json_encode([
        "status" => "faild",
        "mes" => "Les champs sont vide"
    ]);
}
