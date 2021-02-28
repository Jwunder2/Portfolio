<?php
/* 305/student/new-student.php
 * Form to add a new student to the database
 *
 */


// Connect to DB
require('includes/php-setup.php');

/*
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <!-- Add favicon, website where i found the favicon: https://findicons.com/icon/237703/help_contents-->
    <link href="help_contents.png" type="image/png" rel="icon">
    <!--Styles sheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <!--Styles sheet -->
</head>
<body>
<!--add jumbotron -->


<!--Form w/Contact Info,fname,lname, job title, company, linkedin url, email -->
<!--how we met,other textbox, message -->
<!--mailing list, "please add me to your mailing list checkbox, radio button with HTML or text -->
<!--submit button -->

<!--container -->
<div class="container" id="main">
    <!--add jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4">Sign My Guestbook!</h1>
    </div>

    <!--nav -->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="http://jwunder.greenriverdev.com/305/Resume/Resume.html">Resume</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://jwunder.greenriverdev.com/305/guestbook/guestbook.html">Guestbook <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://jwunder.greenriverdev.com/305/public_html/guestbook/admin_page.php">Admin Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/james-wunder/">Linkedin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/james-wunder/">Github</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--form-->
    <form action="add_guest.php" method="POST" id="guestForm">

        <!-- Contact Information -->
        <fieldset class="form-group border p-2">
            <legend>Contact Info</legend>
            <div class="form-group">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="fname">
                <span class="err" id="err-fname">Please enter a first name:</span>
            </div>
            <br>

            <div class="form-group">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">
                <span class="err" id="err-lname">Please enter a last name:</span>
            </div>
            <br>

            <div class="form-group">
                <label for="jTitle">Job title:</label>
                <input type="text" class="form-control" id="jTitle" placeholder="Enter job title" name="jTitle">
            </div>
            <br>

            <div class="form-group">
                <label for="company">Company:</label>
                <input type="text" class="form-control" id="company" placeholder="Enter company" name="company">
            </div>
            <br>

            <div class="form-group">
                <label for="linkedURL">Linkedin URL:</label>
                <input type="text" class="form-control" id="linkedURL" placeholder="Enter linkedin URL" name="linkedURL">
                <span class="err" id="err-url">Please enter a URL that begins with http and ends with .com:</span>
            </div>
            <br>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
                <span class="err" id="err-email">Please enter an email with at a @ and . symbol:</span>
            </div>
            <br>
        </fieldset>
        <br>

        <!-- how did we meet-->
        <fieldset class="form-group border p-2">
            <legend>How we met</legend>
            <div class="form-group">
                <select id="meet" class="form-control" name="meet" onchange="otherText()">
                    <option value="none">How did we meet</option>
                    <option value="meetup">Meetup</option>
                    <option value="jobFair">Job Fair</option>
                    <option value="notYet">Haven't met yet</option>
                    <option value="other">Other</option>
                </select>
                <span class="err" id="err-meet">Please tell me how we met:</span>
            </div>
            <br>

            <div class="form-group" id="other">
                <label for="other">Other (Please specify):</label>
                <textarea class="form-control"  rows="5" cols="30"  name="other" ></textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="message">Leave a message:</label>
                <textarea class="form-control" rows="5" cols="35" id="message" name="message"></textarea>
            </div>
            <br>
        </fieldset>
        <br>

        <!-- mailing list-->
        <fieldset class="form-group border p-2">
            <legend>Mailing List</legend>
            <div class="checkbox">
                <label>
                    <input type="checkbox" id ="mailList" name="mailList" onclick="show()"> Please add me to your mailing list
                </label>
            </div>
            <br>

            <div class="form-check" id="mailHTML">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="method" value="html"
                    >HTML
                </label>
            </div>
            <br>

            <div class="form-check" id="mailText">
                <label class="form-check-label">
                    <input type="radio"  class="form-check-input" name="method" value="text">Text
                </label>
            </div>
        </fieldset>
        <br>
        <button type="submit" class="btn btn-primary btn-default">Submit</button>
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="scripts.js"></script>
</body>
</html>