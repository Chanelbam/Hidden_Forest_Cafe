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

function get_all_appointments() {
    global $pdo;
    global $reservation;
    
    $sql = "SELECT * FROM reservation ORDER BY ID DESC";

    $result = $pdo->query($sql);
    
    while ($row = $result -> fetch()) {
        $reservation[] = $row;
    }
}

function get_appointments() {
    global $pdo;
    global $reservations;

    $sql = "SELECT * FROM reservation ORDER BY email DESC";

    $result = $pdo->query($sql);
    
    while ($row = $result -> fetch()) {
        if(!in_array($row["email"], $reservations)) {
            $reservations[] = $row["email"];
        }
    }
}

function the_reservations() {
    global $filter;
    global $reservation;

    echo "<div><h2>Current Reservations:</h2>";

    if($reservation==null) {
        ?>
            <div class="results">
                <p>No current reservations.</p>
            </div>
        <?php
    }
    else 
    {
        foreach($reservation as $values) {
            ?>
                <div class="results">
                    <p><?php echo $values["full_name"]; ?> has a reservation on <?php echo $values["restaurant_day"]; ?> on <?php echo $values["restaurant_time"]; ?> for <?php echo $values["occupants"]; ?>.</p>
                </div>
            <?php
        }
    }
}