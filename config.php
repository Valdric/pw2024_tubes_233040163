<?php

$server = "localhost";
$username = "id22301539_valdric";
$password = "Valdric09#";
$database = "id22301539_pw2024_tubes_233040163";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>