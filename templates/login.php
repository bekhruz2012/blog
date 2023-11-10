<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Corrected user credentials
    $validUsername = "user";
    $validPassword = "user$$4321";

    // Check if the entered username and password match the valid credentials
    if ($username == $validUsername && $password == $validPassword) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}

?>
