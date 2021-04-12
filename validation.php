<?php

$valid = false;
$val_messages = Array();

function the_results()
{
    global $valid;
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if ($valid == true)
        {
            ?>
            <div class="results">
                <p class="result-text">Your first and last name is <?php echo $_POST["fname"]." ".$_POST["lname"]?></p>
                <p class="result-text">Your phone number <?php echo $_POST["phone"]?></p>
                <p class="result-text">Your email address is <?php echo $_POST["email"]?></p>
                <p class="result-text">Your appointment is on <?php echo $_POST["restaurant_day"]." at ".$_POST["restaurant_tme"]." for ".$_POST["occupants"]."guests"?></p>
            </div>
            <?php
        }
    }
}

function validate() {
    global $valid;
    global $val_messages;

    $result = true;

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
        if(isset($_POST["email"])) {
            foreach($_POST as $type => $value)
            {
                if ($type=='email')
                {
                    $submitted = $_POST["email"];
                    $pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';

                    $this_result = preg_match($pattern, $submitted);
                    $result= $result && $this_result;

                    if($this_result == true) {$val_messages[$type]="";}
                    else {$val_messages[$type]="email is not correct format";}
                }
            }
        } else {
            echo "<p>Something has gone wrong with the form!</p>";
        }
        $result=$result && $this_result;
        $valid = $result;
    }
}

function the_validation_message($type) {

    global $val_messages;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($val_messages[$type]!="") {
            echo "<p class='failure-message'> ${val_messages[$type]} </p>";
        }
    }
}