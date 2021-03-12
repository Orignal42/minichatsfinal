<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body>
<a href="inscription.php">Pour s'inscrire c'est ICI</a></br>
<p>Connection</p>
<form action="confirm.php" method="post" >
<label><input type="text"name="user"  placeholder="Pseudo"></label>
<label><input type="text"name="password"  placeholder="password"></label>

<button>connection</button>
</form>
</body>
</html>
