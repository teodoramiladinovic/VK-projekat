<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "knjizara";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connect failed: " . $conn->connect_error);
}

?>