<?php
$servername = "smartraceresult.com";
$username = "u114243576_run";
$password = "*Nextsoft1234";
$dbname = "u114243576_run";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

