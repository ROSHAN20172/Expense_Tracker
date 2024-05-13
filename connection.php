<?php

    $dsn = 'mysql:host=localhost; dbname=expense-tracker';
    $user = 'roshan-2329235-portfolio';
    $pass = 'Crackup$20172';

    try {
        $pdo = new PDO($dsn, $user, $pass);
    }
    catch(PDOException $e){
        echo "Connection Error! ". $e->getMessage();
    }
?>

