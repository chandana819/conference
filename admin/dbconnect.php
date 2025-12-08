<?php
//Establishing connection with the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'conference_db'); //where books is the database name
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// $db=mysqli_connect('localhost','nirmal','nirmal@213','my_library');
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>
<br>
    