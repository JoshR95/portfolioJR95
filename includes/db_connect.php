<?php
// local host - uncomment when serving locally
$host = 'localhost';
$dbname = 'my_portfolio';  // Your database name
$username = 'root';        // Your database username
$password = '';           // Your database password

// C PANEL - un comment when on cpanel 

// $host = '127.0.0.1';
// $dbname = 'joshuarickards_portfolio';  // Your database name
// $username = 'joshuarickards_root';        // Your database username
// $password = 'Password_123.';           // Your database password


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}
?>