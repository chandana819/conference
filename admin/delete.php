<?php

include "../dbconnect.php";
session_start();

$id = $_GET['id'];

$delete = "DELETE FROM registration where regid='$id'";
$delete_perfrom = mysqli_query($db, $delete);

if($delete_perfrom)
{
    echo "<script type='text/javascript'>alert('Successfully deleted')</script>";
    echo "<script>document.location='dashboard.php'</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Could not delete!! Please try again')</script>";
    echo "<script>document.location='index.php'</script>";
}
?>