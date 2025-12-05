<?php

session_start();
if($_POST['pin'])
{

	$pin=$_POST['pin'];

   //  include "connect.php";  
  
  //$result=mysqli_query($conn, "select * from players where pid='$pid' and pin='$pin'");
  
  if($pin == "9018" || $pin == "8080")
   {
	 $_SESSION['partner']="CTFPPB 2023";    	
   }
  else
   {
    //clear session from globals
    $_SESSION = array();
    //clear session from disk
    session_destroy();
    header("Location:index.php?pwderror");
    exit;
   }
}
else if(isset($_SESSION['partner']))
{
  $partner=$_SESSION['partner'];    	
}
else #if user access the page directly, redirect to login page
{
    //clear session from globals
    $_SESSION = array();
    //clear session from disk
    session_destroy();
	header("Location:index.php");
	exit;
}

?>
