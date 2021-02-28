<?php

//Make sure the user is coming from the form
if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {

    //Send user to form page
    header("location:guestbook.php");
}

require('includes/php-setup.php');


$first = $_POST['fname'];
$last = $_POST['lname'];
$jTitle = $_POST['jTitle'];
$company = $_POST['company'];
$linkedin = $_POST['linkedURL'];
$meet = $_POST['meet'];
$email = $_POST['email'];
$message = $_POST['message'];
$mailList = $_POST['mailList'];
$mailtype = $_POST['method'];


//VALIDATE DATA BEFORE INSERTING INTO DATABASE


$sql = "INSERT INTO guestbook_form VALUES ('$first', '$last', '$jTitle', '$company', '$linkedin', '$email', '$meet', '$message', '$mailList', '$mailtype', current_timestamp )";


$success = mysqli_query($cnxn, $sql);

if ($success) {
    echo "<h3>New guest added</h3>";
} else {
    echo "Something went wrong";
}