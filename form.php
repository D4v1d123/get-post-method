<?php

// Get method => This method sends the form information via URL (Very unsure).
// $username = $_GET['username'];
// $password = $_GET['password'];

// echo "<link rel='stylesheet' href='css/style.css'>";
// echo "<p class='pop_ups'>The user '$username' has been registrered with the password '$password'.</p>";


// Post method => This method sends the form information through of body of HTTP request in encrypted form (Very sure).
// $username = $_POST['username'];
// $password = $_POST['password'];

// echo "<link rel='stylesheet' href='css/style.css'>";
// echo "<p class='pop_ups'>The user '$username' has been registrered with the password '$password'.</p>";


//Request => This method can receiving the information send through of Get or Post method.
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

echo "<link rel='stylesheet' href='css/style.css'>";
echo "<p class='pop_ups'>The user '$username' has been registrered with the password '$password'.</p>";