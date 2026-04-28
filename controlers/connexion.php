<?php

use PHPMailer\PHPMailer\PHPMailer;
session_start();
include("../config/db.php");
require_once("../sendMail.php");
header("Content-Type: application/json");
if (isset($_POST['test'])) {
    $id = $_POST["test"];
    if ($id == 0) {
        $pseudo = htmlspecialchars($_POST["pseudo"]);
        $email = htmlspecialchars($_POST["email"]);
        $mdp = htmlspecialchars($_POST["mdp"]);
        if (!empty($pseudo) && !empty($email) && !empty($mdp)) {
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
                $insert_user = $conn->prepare("INSERT INTO users(Pseudo, Email, Code, Confirmer, Etat, Mdp) VALUES(?,?,?,?,?, ?)");
                if ($insert_user->execute([$pseudo, $email, $code, 0, "En attente", $mdphash])) {
                    //envoie du email
                    $mail = new PHPMailer();
                    if(envoiemail($mail, $email, $content, $pseudo)) {
                        echo json_encode([
                            "status" => "non",
                            "mes" => "compte créer avec succès "
                        ]);
                    }else{
                        echo json_encode([
                        "status" => "non",
                        "mes" => "message non envoyer "
                    ]);
                    }
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
    }
}