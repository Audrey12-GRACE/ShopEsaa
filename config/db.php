<?php
$host='localhost';
$dbname='php_cours';
$username="root";
$mdp="";

try{
    $conn= new PDO("mysql:host=$host;dbname=$dbname",$username,$mdp);
}catch(PDOException $e){
    die("Erreur de connexion à la base ".$e->getMessage());
}

?>