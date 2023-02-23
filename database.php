<?php
    $dsn ="mysql:host=localhost; dbname-todolist";
    $username = "root";
    $password = "Iqar";

    try{
        $db = new PDO($dsn, $username)
    } catch(PDOException $e){
        $error_message = 'Database Error';
        $error_message .= $e->getMessage()
        echo $error_message;
        exit();
    }
?>