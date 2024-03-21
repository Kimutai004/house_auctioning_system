<?php
$dbhost = 'localhost';
$dbname = 'house_bidding'; // Your PostgreSQL database name
$dbuser = 'postgres';
$dbpass = 'kimutai004';

try {
    // Establish a connection to the PostgreSQL database using PDO
    $conn = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit(); // Stop executing the script if connection fails
}
?>

