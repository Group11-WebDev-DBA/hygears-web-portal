<?php
// Opens the database connection. Pages that need data do:  require "includes/db.php";
// then use $conn with prepared statements.

if (!file_exists(__DIR__ . "/../config.php")) {
  die("Missing config.php. Copy config.example.php to config.php and fill it in.");
}
require __DIR__ . "/../config.php";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
