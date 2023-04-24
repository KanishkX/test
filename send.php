
<?php

//retrieve all 6 values sent by the web page
$email = $_POST['email'];  $subject = $_POST['subject'];
$text = $_POST['text'];

//do some error checking on the server side (error checking not required for assignment or project)
$errors = 0;                    $errorMsg = "";

if ($email == "") { $errors = 1; $errorMsg += " field 1 is required. "; }
if ($subject == "") { $errors = 2; $errorMsg += " field 2 is required. "; }
if ($text == "") { $errors = 3; $errorMsg += " field 3 is required. "; }

//send all the data back to the server
if ($errors == 0) {
    echo "Email: $email, Subject: $subject, Text: $text";
} else {
    echo $errorMsg;
}

?>