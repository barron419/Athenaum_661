<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpuser');
define('DB_PASSWORD', 'phpuserpw');
define('DB_DATABASE', 'athenaum');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

function createTable($name, $query)
{
    queryMysql("CREATE TABLE IF NOT EXISTS $name($query)");
    echo "Table '$name' created or already exists.<br>";
}

function queryMysql($query)
{
    global $db;
    $result = $db->query($query);
    if (!$result) die("Fatal Error");
    return $result;
}

function addUser($username, $firstName, $lastName, $email, $password)
{
    queryMysql("INSERT INTO users (username, FirstName, LastName, Email, password) VALUES ('$username', '$firstName', '$lastName', '$email', '$password')");
    echo "User: '$username' has been added.<br>";
}

function addMovie($name, $year, $photo, $username, $synopsis)
{
    queryMysql("INSERT INTO movies (name, year, photo, username, synopsis ) VALUES ('$name', '$year', '$photo', '$username', '$synopsis')");
    echo "Movie:  '$name' has been added.<br>";
}
?>