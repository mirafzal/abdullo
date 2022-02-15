<?php

// Create connection
$conn123321123321 = mysqli_connect("localhost", "root", "", "registsiya");

// Check connection
if (!$conn123321123321) {
    die("Connection failed: " . mysqli_connect_error());
}

return $conn123321123321;