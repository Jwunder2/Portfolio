<?php
/* student.php
   Reads from a database
*/

require('includes/php-setup.php');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GRC Students</title>
</head>
<body>
<h1>Guests</h1>

<a href="guestbook.php">View Guestbook page</a>

<?php
//1. Define the base query
$sql = "SELECT * FROM `guestbook_form` WHERE 1";

//echo "<p>GET:</p>";
//var_dump($_GET);


$sql .= " ORDER BY last, first";
//echo "<p>$sql</p>";

//2. Send the query to the db
$result = mysqli_query($cnxn, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<h2>No results found</h2>";
}

//3. Print the result
//var_dump($result);
foreach ($result as $row) {
    //var_dump($row);

    $first= $row['First'];
    $last = $row['Last'];
    $jTitle = $row['jTitle'];
    $company = $row['company'];
    $linkedin = $row['Linkedin'];
    $email= $row['Email'];
    $meet = $row['Meet'];
    $message = $row['Message'];
    $mailList = $row['MailList'];
    $mailType = $row['Html/Text'];
    $timestamp = $row['submitted'];



    echo "<p>$first, $last, $jTitle, $company, $linkedin, $email, $meet, $message, $mailList, $mailType, $timestamp</p>";
}
?>
</body>
</html>









