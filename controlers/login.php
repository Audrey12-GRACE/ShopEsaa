<?php
session_start();
include("../config/db.php");
//require_once("../sendMail.php");
header("Content-Type: application/json");
$email = htmlspecialchars($_POST["email"]);
$mdp = htmlspecialchars($_POST["password"]);
if (!empty($email) && !empty($mdp)) {
    $req_user = $conn->prepare("SELECT * FROM users WHERE Email=?");
    $req_user->execute([$email]);

    if ($req_user->rowCount() == 1) {
        $user = $req_user->fetch();
        $mdpreq = $user["Mdp"];
        $confirmer = $user["Confirmer"];
        if (password_verify($mdp, $mdpreq)) {
            $_SESSION["email"] = $user["Email"];
            $_SESSION["id"] = $user["Ref_user"];
            if ($confirmer == 1) {
                echo json_encode([
                    "status" => "success",
                    "mes" => ""
                ]);
            } else {
                echo json_encode([
                    "status" => "non_confirmer",
                    "mes" => ""
                ]);
            }
        } else {
            echo json_encode([
                "status" => "faild",
                "mes" => "Mot de passe incorrect"
            ]);
        }
    } else {
        echo json_encode([
            "status" => "faild",
            "mes" => "Compte n'existe pas"
        ]);
    }
} else {
    echo json_encode([
        "status" => "faild",
        "mes" => "Les champs sont vides"
    ]);
}
