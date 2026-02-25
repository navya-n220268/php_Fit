<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

try {
    $client = new MongoDB\Client($_ENV['MONGO_URI']);
    $database = $client->{$_ENV['DB_NAME']};
    $usersCollection = $database->users;

} catch (Exception $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>