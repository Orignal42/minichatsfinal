
<?php
require_once(__DIR__."/pdo.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minichat</title>
  <link href="css/custom.css" rel="stylesheet">
</head>
<body>

  <section id="chat">
      <div class="messages" >
      <?php include "./php/automsg.php"; ?>
      </div>


      <div class="utilisateur">  
      <?php include "./php/utilisateurs.php"; ?>
               

         </div>
        </section>
<!--<form action="/php/insertmgs.php" method="post">-->
 
           <div class="send">     
     
      <p><label> Message:<textarea name="message" required placeholder="message"id="message"> </textarea>   </label></p>                 

      <button onclick="messagers()" >Envoyer message</button>
      <a href="php/sessionend.php">Deconnection </a>
      </div>

      
    
<!--</form>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="./php/rafraichir.js"></script>
</body>
</html>
