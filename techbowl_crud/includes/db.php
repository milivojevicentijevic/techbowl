<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "techbowl";

$conn = mysqli_connect($servername, $username, $password, $db_name) or die("Conncetion error: ".mysqli_connect_error());