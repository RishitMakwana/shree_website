<?php 
// // DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','shree');
// // Establish database connection.
// try{
//     $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
// }
// catch (PDOException $e){
//     exit("Error: " . $e->getMessage());
// }

$host     = "localhost"; // Database Host
$user     = "root"; // Database Username
$password = ""; // Database's user Password
$database = "shree"; // Database Name

$conn = mysqli_connect($host, $user, $password, $database);
if (!$conn) {
    die("Failed to connect to MySQL: " .mysqli_connect_error());
}

?>