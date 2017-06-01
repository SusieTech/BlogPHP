<?php
namespace validate_bio_function;


//Display Validate bio info once file has been requested info has been added:
$bio = "";

if (isset($_POST["sumbit"])) {
    $bio = ($_POST['bio']);
}
$text = 'Tell us about yourself';

// $subject = 'MESSAGE FROM YOUR TRAVEL BLOG';
//  $headers =  'From: $from' . "\r\n" .
//              'Reply-To: $email' . "\r\n" ;
//   $body = "From: $name \n E-Mail: $email \n Message: $message ";
function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = (filter_var($data, FILTER_SANITIZE_STRING));
        return $data;
    }
    // define variables and set to empty values
$bioErr = "";
$bio;


if ($_POST["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["bio"])) {
        $bioErr = "Field is required";
    } else {
        $bio = test_input($_POST["bio"]);
    }

    //finish off w3schools validte email  
    $name = test_input($_POST['bio']);
    if (!preg_match("/^[a-zA-z]*$/", $name)) {
        $bioErr = "Only letters and white spaces allowed";
    }
}

//Form Submission that shows the user input

// define variables and set to empty values
$bioErrr = "";
$name = "";

if ($_POST["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["bio"])) {
        $bioErr = "Bio is required";
    } else {
        $bio = test_input($_POST["bio"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $bio)) {
            $bioErr = "Only letters and white space allowed";
        }
    }
}