<?php  
require_once(__DIR__."/pdo.php");

$selectStatement=  $pdo->prepare(
  'SELECT *  FROM utilisateurs ');
$selectStatement->execute(); 
$usersList = $selectStatement->fetchAll();
?>

<?php
  foreach ( $usersList as $user){ ?> 
    
     <?=$user['users']?></br>
     
        
<?php  } ?>