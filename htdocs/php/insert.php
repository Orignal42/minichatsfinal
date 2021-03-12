<?php
  require_once(__DIR__."/pdo.php");

  include 'RandomColor.php';
use \Colors\RandomColor;
$color = RandomColor::one(array('format'=>'hex'));

$user=$_POST["users"];


setcookie("useres",$user,time()+3600,"/");



if (empty($_POST["users"])){
    die("parametres manquants");
    
}  



$user=$_POST["users"];

$insertStatement= $pdo-> prepare('SELECT* FROM utilisateurs WHERE users=? ');
$insertStatement->execute([$user]);
$verifpseudo=$insertStatement->fetch(PDO::FETCH_ASSOC);

 if($verifpseudo){
die("Pseudo existant"); 


}

    else{


        $insertUsersStatement = $pdo->prepare("
INSERT INTO utilisateurs
(users, password, ip, color)
VALUES
(?,?,?,?)"
);


$insertUsersStatement-> execute([

  $_POST["users"],
  $_POST["password"],
  $_SERVER['REMOTE_ADDR'],
  $color

]);

    }

header('Location: /php/acceuil.php');
