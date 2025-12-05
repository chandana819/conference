<?php include "access_check.php"; ?>
<?php 
   include "dbconnect.php";
   $partner=$_SESSION['partner'];
?>
<!doctype html>
<html class="sidebar-light fixed sidebar-left-collapsed">
	<head>
     <?php include "head.php"; ?>
	 <style>
		  td{
 		  color:#000000;
	    }
		
	.ui-pnotify.red .ui-pnotify-container {
		background-color: #DC143C !important;
		color:#ffffff;
		border:0px;
		}

	.ui-pnotify.blue .ui-pnotify-container {
		background-color: #0088cc !important;
		color:#ffffff;
		border:0px;
		}
	 </style>
    </head>
	<body>
		<section class="body">
            <?php include "header.php"; ?>
			<div class="inner-wrapper">
			<!-- start: sidebar -->
            <?php include "sidebar.php"; ?>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>CTFPPB 2023</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
					<div class="col-md-12">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">ASBTRACTS SUBMITTED</h5>
							<section class="card mt-4">
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th>S.No</th>
												<th width='30%'>Participant Info</th>
												<th>Registration Details</th>
												<th>Downloads</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
 										  
        								  $abs_res=mysqli_query($db, "SELECT * from registrations order by id desc;"); 		

										  $sno=1;
          								  while($row=mysqli_fetch_array($abs_res))
										    {
											  echo "<tr>";
											  echo "<td>$sno</td>";
											  $sno++;
											  
											  echo "<td style='word-break: break-all;'><i class='fa fa-user'></i> <a> <b>".$row['name']."</b></a><br><i class='fa fa-phone'></i> ".$row['mobile']."<br><i class='fa fa-envelope'></i> ".$row['email']."<br><i class='fa fa-certificate'></i> ".$row['desig']."<br><i class='fa fa-sitemap'></i> ".$row['dept']."<br><i class='fa fa-university'></i> ".$row['institution'].", ".$row['city'].", ".$row['state'].", ".$row['country']."<br><i class='fa fa-female'></i> ".$row['gender']."<br> <i class='fa fa-calendar'></i> Reg. Timestamp: ".$row['timestamp']."</td>";
											  
											  echo "<td><i class='fa fa-comment'></i>  ".$row['ptype']." Presentation<br><i class='fa fa-id-badge'></i>  ".$row['role']."<br><br><b>PAYMENT INFO</b><br><i class='fa fa-print'></i> <a href='../uploads/payments/".$row['receipt']."' target='_new'>Download Receipt</a><br><i class='fa fa-barcode'></i> Transaction ID: ".$row['transaction']."<br> <i class='fa fa-calendar'></i> Transaction Date: ".$row['dpayment']."</p></td>";
											  //echo '<td><p align="justify"><a href="delete.php?id='.$row['regid'].'" class="btn btn-primary">Delete</p></td>';	
											  echo "<td><p align='justify'><a href='../uploads/abstracts/".$row['abstract']."' class='btn btn-primary' target='_new'>Download Abstract</a></p></td>";	
											  echo "</tr>";
                                            }											
                                        ?>  
										</tbody>
									</table>
<!--                                 <div align='right'><a href=''>More...</a></div> -->
								</div>
							</section>
								

					</div>

				</section>
			</div>


		</section>

		<!-- Vendor -->
		<script src="../vendor/jquery/jquery.js"></script>
		<script src="../vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../vendor/popper/umd/popper.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../vendor/common/common.js"></script>
		<script src="../vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="../vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../vendor/jquery-ui/jquery-ui.js"></script>
		<script src="../vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="../vendor/jquery-appear/jquery-appear.js"></script>
		<script src="../vendor/owl.carousel/owl.carousel.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../js/theme.js"></script>
        <script src="../js/examples/examples.modals.js"></script>
        <script src="../vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Theme Custom -->
		<!--<script src="js/custom.js"></script>-->
		<!--<script src="js/housie.js"></script> -->
		
		<!-- Theme Initialization Files -->
		<script src="../js/theme.init.js"></script>

		<script>
		
		//BUY_TICKET......
		function change_status(pid,type)
          {
			var er = "gerr" + pid;	 
			if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
			else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}

			xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==1)
						{
						 document.getElementById(er).innerHTML="Updating..";
						}
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						 document.getElementById(er).innerHTML=xmlhttp.responseText;
						}
				}
			xmlhttp.open("GET","change_ostatus.php" + "?pid=" + pid + "&type=" + type, true);
			xmlhttp.send();
			
		}

		//GET GAMES......
		function get_games()
          {
			if (window.XMLHttpRequest)
				{// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				}
			else
				{// code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				}

			xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById('my_games').innerHTML=xmlhttp.responseText;
						}
				}
			xmlhttp.open("GET","my_games.php", true);
			xmlhttp.send();
		}
				
	</script>

	<br><br>
    <?php include "footer.php"; ?>
	</body>
</html>