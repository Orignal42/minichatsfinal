<?php
 session_start();
 require_once(__DIR__."/pdo.php");




if (empty($_POST['message'])){ 
    
    die('paramètre manquant');
}

$insertStatement = $pdo->prepare("
SELECT * FROM utilisateurs WHERE users = ?
");

$insertStatement ->execute([
    $_SESSION["user"],
]);
$resultUser = $insertStatement->fetch(PDO::FETCH_ASSOC);
var_dump($resultUser['id']);
date_default_timezone_set('Europe/Paris');
$datetime=date('Y-m-d H:i:s');
$insertStatement = $pdo->prepare("

    INSERT INTO messages
    (id_users, created_at, message)
    values
    (?, ?, ?)
    ");

$insertStatement->execute([
    $resultUser["id"],
    $datetime,
    $_POST["message"],
    

]);

