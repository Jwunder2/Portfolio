<?php


/* This file should be moved to your home directory on the
 * server and then deleted from your local directory
 *
 */

// Connect to DB
function connect()
{
    $username = 'jwunderg_grcuser'; //Insert your database username here
    $password = 'p-+J9u4n0C6EPz'; //Insert your password here
    $hostname = 'localhost';
    $database = 'jwunderg_grc';  //Insert your database name here
    $cnxn = mysqli_connect($hostname, $username, $password, $database);
    if ($cnxn->connect_error) {
        die("Connection failed: " . $cnxn->connect_error);
    }
    echo 'Connected successfully';
    return $cnxn;
}