<?php


function validate() {
    global $valid;
    global $val_messages;

    $result = true;
    $this_result = false;
    

    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
        if(isset($_POST["full_name"]) && isset($_POST["email"])) 
        {
            foreach($_POST as $type => $value)
            {
                if($type=="full_name")
                {
                    $submitted = $_POST["full_name"];
                    $pattern = '/^[A-Za-z ]+$/';

                    $this_result = preg_match($pattern, $submitted);
                    $result= $result && $this_result;

                    if($this_result == true) 
                    {
                        $val_messages["full_name"]="";
                    }
                    else if($this_result == false)
                    {
                        $val_messages["full_name"]="The first name can only contain characters from a-z (A-Z)";
                    }
                }
                else if($type=="email")
                {
                    $submitted = $_POST["email"];
                    $pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
                    
                    $this_result = preg_match($pattern, $submitted);
                    $result= $result && $this_result;
                    
                    if($this_result == true) {
                        $val_messages[$type]="";
                    } 
                    else if($this_result == false)
                    {
                        $val_messages[$type]="This is an invalid email address.";
                    }
                }
            }
        }
        $result = $result && $this_result;
        return $valid = $result;
    }
}

function the_validation_message($type) {
    global $val_messages;

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if($val_messages[$type]!="") {
            echo "<p class='failure-message'> ${val_messages[$type]} </p>";
        }
    }
}

function the_results()
{
    global $valid;
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if ($valid == true)
        {
            ?>
            <div class="results">
                <p class="result-text">Your name for your reservation is <?php echo $_POST["full_name"]?></p>
                <p class="result-text">Your email address is <?php echo $_POST["email"]?></p>
                <p class="result-text">Your appointment is on <?php echo $_POST["restaurant_day"]." at ".$_POST["restaurant_time"]." for ".$_POST["occupants"]." guests"?></p>
            </div>
            <?php
        }
    }
}