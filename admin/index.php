<?php
session_start();



$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= htmlspecialchars($username)?></h1>
    <form action="aksi_logout.php" method="POST"> 
        <button type="submit">Log out</button>
    </form>
</body>
</html>
