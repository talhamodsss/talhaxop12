<?php
// Connect to Database
$conn = new mysqli("localhost", "user", "pass", "valentine_db");

$name = $_POST['name'];
$message = $_POST['message'];
$unique_id = substr(md5(time()), 0, 6); // Generate a short ID

// Save to DB
$sql = "INSERT INTO links (slug, recipient, message) VALUES ('$unique_id', '$name', '$message')";
$conn->query($sql);

// Return the short link
echo "https://offerswall.in/valentine/" . $unique_id;
?>
