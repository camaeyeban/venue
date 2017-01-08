<?php require_once('includes/connection.php'); ?>
<?php require_once('includes/header.php'); ?>

	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>

			</ol>
			<div class="carousel-inner" role="listbox">
				
    					<div class="item active">
					<img src="images/banner.png" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<p><a class="btn btn-lg btn-primary" href="venues.php" role="button">View Venues</a></p>
						</div>
					</div>
				</div>
			
    	<?php 
    									$stid = oci_parse($conn, 'SELECT * FROM venue');
										oci_execute($stid);
    				
      	
      	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
      			
										echo'
				<div class="item">
					<img src="'.oci_result($stid, 'PIC').'" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>'.oci_result($stid, 'NAME').'</h1>
							<p><a class="btn btn-lg btn-primary" href="venues.php" role="button">View Venues</a></p>
						</div>
					</div>
				</div>
				';
			}
			?>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

		<div class="container marketing">
			<div class="row">
				<div class="col-lg-4">
					<img class="img-circle" src="images/sign-up.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2>Sign up</h2>
					<p>Not yet a member? Register now and enjoy the perks of easy and hassle-free event reservations in different parts of the Philippines.</p>
					<p><a class="btn btn-default" href="sign-up.php" role="button">Sign up today!</a></p>
				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="images/view.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2>View venues</h2>
					<p>See different parts of the Philippines. A click to bring you to Cavite, another to Palawan. Go anywhere anytime!</p>
					<p><a class="btn btn-default" href="venues.php" role="button">View locations &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img class="img-circle" src="images/terms-and-conditions.png" alt="Generic placeholder image" style="width: 140px; height: 140px;">
					<h2>Terms and Conditions</h2>
					<p>Interested in reserving a venue? Know more about it and explore the benefits of an online venue reservation system!</p>
					<p><a class="btn btn-default" href="terms-and-conditions.pdf" role="button">View details &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->
<?php require_once('includes/footer.php'); ?>