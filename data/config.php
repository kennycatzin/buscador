<?php

$host = "192.168.64.4"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "ejemplo"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}