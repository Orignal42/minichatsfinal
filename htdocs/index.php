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

$selectStatement=  $pdo -> prepare('SELECT users.*, messages.message, messages.dateHour FROM users JOIN messages ON messages.id=users.id ');
$selectStatement->execute(); 
$selectStatement;


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minichat</title>
    <link href="./css/custom.css" rel="stylesheet">
</head>
<body>
<?php if(isset($_GET["message"])) : ?>
   <div style="padding:10px;background:green;color:#fff;">
   <?=    $_GET["message"]?>
   </div>          
     <?php endif ;?>  
    <section id="messages">
    
    <?php 
    
           foreach ($selectStatement->fetchAll() as $user){ ?>
               <tr>
               <td><?= $user['dateHour']?></td>
               <td><?= $user['user']?></td>
  
               <td><?= $user['messages']?></td>

           </tr>

               
 

 <?php   

           }
?>
        

    </section>
    <form action="./php/insert.php" method="post " >
    
          <div class="send">     
        <p><label>User :<input type="text" name="users" required placeholder="user" ></label></p>
        <p><label> Message:<input type="text" name="message" required placeholder="messages" >   </label></p>                 
 
        <button>Envoyer message</button>
        </div>
    </form>
    
</body>
</html>




