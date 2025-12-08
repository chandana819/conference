<?php include "access_check.php"; ?>
<?php

  include "connect.php";

  $pid = $_GET['pid'];
  $type = $_GET['type'];

  if($type == 3)
  {
    $query = "update oc_product set status=0 where product_id=$pid";
  
    mysqli_query($conn, $query);
  
    echo "<a href='' onclick='change_status($pid,1);'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-success'>ENABLE</button></a>";
  }
  else if($type == 2)
  {
    $query = "update oc_product set quantity=0, stock_status_id=17 where product_id=$pid";
    mysqli_query($conn, $query);
  
  	echo "<a href='#' onclick='change_status($pid, 3);'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-danger'>DISABLE</button></a>";
  }
  else if($type == 1)
  {
    $query = "update oc_product set quantity=15, stock_status_id=7, status=1 where product_id=$pid";
    mysqli_query($conn, $query);
  
    echo "<a href='#' onclick='change_status($pid,2);'><button type='button' class='mb-1 mt-1 mr-1 btn btn-xs btn-warning'>MARK SOLD</button></a>";
  }
  else
  {
    echo "Error!";
  }	  
?>