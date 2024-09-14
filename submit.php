<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$date = $_POST['date'];
$password = $_POST['password'];
$year_level = $_POST['year-level'];

echo "First Name: " . htmlspecialchars($firstname) . "<br>";
echo "Last Name: " . htmlspecialchars($lastname) . "<br>";
echo "Email: " . htmlspecialchars($email) . "<br>";
echo "Password: " . htmlspecialchars($password) . "<br>";
echo "Date: " . htmlspecialchars($date) . "<br>";
echo "Year Level: " . htmlspecialchars($year_level) . "<br>";

?>
