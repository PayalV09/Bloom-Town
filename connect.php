<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=food_db", "root", "");
    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // If connection fails, output the error
    echo "Connection failed: " . $e->getMessage();
}
?>
