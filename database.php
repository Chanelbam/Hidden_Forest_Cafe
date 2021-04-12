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

function handle_form_submission() {
    global $pdo;

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"]) && isset($_POST["restaurant_day"]) && isset($_POST["restaurant_time"]) && isset($_POST["occupants"])) {
            $sql = 'INSERT INTO reservation (fname, lname, email, restaurant_day, restaurant_time, occupants) VALUES (:fname, :lname, :email, :restaurant_day, :restaurant_time, :occupants)';
            
            $statement = $pdo->prepare($sql);
            $statement->bindValue(':fname', $_POST["fname"]);
            $statement->bindValue(':lname', $_POST["lname"]);
            $statement->bindValue(':email', $_POST["email"]);
            $statement->bindValue(':restaurant_day', $_POST["restaurant_day"]);
            $statement->bindValue(':restaurant_time', $_POST["restaurant_time"]);
            $statement->bindValue(':occupants', $_POST["occupants"]);

            $statement->execute();
            }
    }
}