<?php
session_start();
include("../config/db.php");
if (isset($_SESSION["id"])) {
    $sel = $conn->prepare("SELECT COUNT(*) as t FROM panier WHERE Ref_user= ?");
    $get = $_GET["id"];
    if (isset($get) && ($get > 0)) {
        $req = $conn->prepare("SELECT FROM panier WHERE Id_prod= ? AND Ref_user=?");
        $req->execute([$get, $_SESSION["id"]]);
        if ($req->rowCount() > 0) {
            $del = $conn->prepare("DELETE FROM panier WHERE Id_prod= ? AND Ref_user=?");
            if ($del->execute([$get, $_SESSION["id"]])) {
                $sel->execute([$_SESSION["id"]]);
                $p = $sel->fetch();
                echo $p["t"];
            } else {
                $sel->execute([$_SESSION["id"]]);
                $p = $sel->fetch();
                echo $p["t"];
            }
        } else {
            $insert = $conn->prepare("INSERT INTO panier(Id_prod, Ref_user) Values(?,?)");
            if ($insert->execute($get, $_SESSION['id'])) {
                $sel->execute([$_SESSION["id"]]);
                $p = $sel->fetch();
                echo $p["t"];
            };
        }
    }
} else {
    echo "connect";
}
