<?php

require_once(__DIR__."/pdo.php");


session_start();


if (empty($_POST['user']) ||
    empty($_POST['password'])) {
    
    die('login ou mot de passe manquant');


    }
$_SESSION['password']=$_POST['password'];
$_SESSION['user']=$_POST['user'];
$sql= ("SELECT * FROM utilisateurs WHERE users = :users AND password = :password");
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':users' => $_POST["user"], ':password' => $_POST["password"]));
    $count = $stmt->rowCount();
    if($count > 0)
    {
        
        header('Location: /index.php?connecte');
    }
    else
    {
        header('Location: /php/acceuil.php?utilisateur ou mot de passe invalide');
    }
}
 catch (Exception $e) {
    print "Erreur de lecture! " . $e->getMessage() . "<br/>";
}







?>