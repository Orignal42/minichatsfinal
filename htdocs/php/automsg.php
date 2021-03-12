<?php  
require_once(__DIR__."/pdo.php");

$selectStatement=  $pdo->prepare(
  'SELECT utilisateurs.*, messages.message, messages.created_at
   FROM utilisateurs JOIN messages ON messages.id_users=utilisateurs.id ORDER BY created_at ASC ');
$selectStatement->execute(); 
$usersList = $selectStatement->fetchAll();
?>

<?php
  foreach ( $usersList as $user){ ?> 
 <div class=tab>
 <div class="tablo"><?=$user['users']?></div>
     <div class="tablo"><?=$user['created_at']?></div>
     <div class="tablo" ><span style="color:<?= $user['color']?>"><?=$user['users']?></span>
    </div>
     <div class="tablo"><?=$user['message']?></div>  
     </div>
        
<?php  } 


?>
