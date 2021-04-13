<?php

require 'dbconfig.php';

function db_connect() {
    try {
        $connectionString = 'mysql: host='. DBHOST . '; dbname=' . DBNAME;
        $user = DBUSER;
        $pass = DBPASS;
        
        $pdo = new PDO($connectionString, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    catch (PDOException $e)
    {
        die($e->getMessage());
    }
}

function handle_form_submission($valid) {
    global $pdo;

    if($_SERVER["REQUEST_METHOD"] == "POST" && $valid == true)
    {
        if(isset($_POST["full_name"]) && isset($_POST["email"]) && isset($_POST["restaurant_day"]) && isset($_POST["restaurant_time"]) && isset($_POST["occupants"])) {
            $sql = 'INSERT INTO reservation (full_name, email, restaurant_day, restaurant_time, occupants) VALUES (:full_name, :email, :restaurant_day, :restaurant_time, :occupants)';
            
            $statement = $pdo->prepare($sql);
            $statement->bindValue(':full_name', $_POST["full_name"]);
            $statement->bindValue(':email', $_POST["email"]);
            $statement->bindValue(':restaurant_day', $_POST["restaurant_day"]);
            $statement->bindValue(':restaurant_time', $_POST["restaurant_time"]);
            $statement->bindValue(':occupants', $_POST["occupants"]);

            $statement->execute();
        }
    }
}