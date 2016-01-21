<?php

//remove before flight
ini_set('display_errors', 'On');

try {
    $db = new PDO('sqlite:./database.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP data Objects</title>
</head>
<body id="home">
    <h1>
        Sakila sample database
    </h1>
    <h2>Films by title</h2>
    <ul>
        <li>Film One</li>
        <li>Film Two</li>
        <li>Film Three</li>
        <li>Film Four</li>
    </ul>
</body>
</html>