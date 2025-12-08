<?php include "access_check.php"; ?>
<?php 
   include "connect.php";
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
						<h2>AYUSH Dr. CAFE</h2>
					</header>

					<!-- start: page -->
					<div class='row'>
					<div class="col-xl-9">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">Our Daily Menu</h5>
							<section class="card mt-4">
								<div class="card-body">
									<table class="table table-responsive-md table-striped mb-0">
										<thead>
											<tr>
												<th colspan='2'>AYUSH Dr. CAFE MENU</th>
											</tr>
										</thead>
										<tbody>
                                        <?php
 										  
        								  $prod_res=mysqli_query($conn, "SELECT p.product_id,category_id,name,model,price,quantity,stock_status_id, status, image FROM oc_product_description c, oc_product_to_category p, oc_product o where c.product_id=p.product_id and o.product_id=p.product_id  and category_id=144 and status=1 order by price;"); 		

										  $sno=1;
          								  while($row=mysqli_fetch_array($prod_res))
										    {
   	        								  $pid=$row['product_id'];
   	        								  $qty=$row['quantity'];
											  $stock_status=$row['stock_status_id'];
											  $status=$row['status'];
											  $img=$row['image'];
											  $pname=strtoupper($row['name']);

											  echo "<tr>";
											  echo "<td><img src='../../image/$img' width='50px' height='50px'></td>";
											  echo "<td><a><b>$sno. ".$pname."</b></a>";
											  $sno++;
											  
/*        if($status==1)
		  {
            if($qty==0)
			{
			  echo " <i class='fa fa-circle' style='color:orange;font-size:10px;'></i> <b style='color:orange;font-size:10px;'>SOLD OUT</b>";  
            }			  
			else
			{
			  echo " <i class='fa fa-circle' style='color:green;font-size:10px;'></i> <b style='color:green;font-size:10px;'>Available</b>";  
            }			  
		  }
		else
		  {
			echo " <b><i class='fa fa-circle' style='color:red;font-size:10px;'></i> <b style='color:red;font-size:10px;'>DISABLED</b>";   
		  }
	*/										  
        echo "<br>Rs.".number_format($row['price'],0)."/-</td>";
		echo "</tr>";
 }											
                                        ?>  
										</tbody>
									</table>
<!--                                 <div align='right'><a href=''>More...</a></div> -->
								</div>
							</section>
								

					</div>
					<div class="col-xl-3">
					<h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">Today's Orders</h5>
					<section class="card mt-4" style='height:350px;'>
									<div class="card-body"><br>
							<ul class="simple-bullet-list mb-3" id='my_games'>
							<?php include "my_games.php"; ?>
							</ul>
									</div>
								</section>
					</div>
                    </div>

					<div class='row'>
					 <div class="col-xl-12">
					 <h5 class="font-weight-semibold text-dark text-uppercase mb-3 mt-3">Our Partners & Sponsors</h5>
					  <div class="owl-carousel owl-theme" data-plugin-carousel data-plugin-options='{ "dots": false, "autoplay": true, "autoplayTimeout": 3000, "loop": true, "margin": 10, "nav": true, "responsive": {"0":{"items":2 }, "600":{"items":3 }, "1000":{"items":6 } }  }'>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/bvrmol.jpg" alt=""></div>
<!--					<div class="item"><img class="img-thumbnail" src="img/sponsors/westberry.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/varma.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/food_republic.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/srkrec.jpg" alt=""></div>
						<div class="item"><img class="img-thumbnail" src="img/sponsors/mcr_web.jpg" alt=""></div>-->
						<div class="item"><img class="img-thumbnail" src="img/sponsors/ayush.jpg" alt=""></div>
						
					  </div>
					 </div>
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