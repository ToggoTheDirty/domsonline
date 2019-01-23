<?php
/**
 * Created by PhpStorm.
 * User: Dave The Dev
 * Date: 20/1/2019
 * Time: 11:00 AM
 */


$servername = "localhost";
$username = "domsadmin ";
$password = "domsadmin";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>