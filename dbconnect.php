<?php
//Establishing connection with the database
define('DB_SERVER', '127.0.0.1:4306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'conference_db'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// $db=mysqli_connect('localhost','nirmal','nirmal@213','my_library');
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<br>
