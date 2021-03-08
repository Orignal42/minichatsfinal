<?php


$dsn = 'mysql:dbname=minichat;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}


$insertUsersStatement = $pdo->prepare("
INSERT INTO users
(user)
VALUES
(?)

");


$insertUsersStatement-> execute([

    $_POST["user"],

]);

$idpatients=$pdo->LastinsertId();



$insertMessagesStatement = $pdo->prepare("
    INSERT INTO messages
    (message,
    dateHour
    
    )
     VALUES
    (?,?)

    ");
 
            
    $datetime=date('Y-m-d H:i:s') ;
         
           $insertMessagesStatement-> execute([
             $_POST("messages"), 
             $datetime
            ]);
   








 header('Location: index.php?votre message a bien été edité.');

?>