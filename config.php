<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "login_register";

$conn = new mysqli("localhost", "root", "", "login_register");

if ($conn->connect_error) {
    die("Connection Failed: ". $conn->connect_error);   
}






?>