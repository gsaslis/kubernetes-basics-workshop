<?php

define("DB_HOST", getenv('DB_HOST'));
define("DB_USER", getenv('DB_USER'));
define("DB_PASS", getenv('DB_PASS'));
define("DB_NAME", getenv('DB_NAME'));

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The devstaff_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
echo "Server IP: " . $_SERVER['SERVER_ADDR'];

mysqli_close($link);
?>