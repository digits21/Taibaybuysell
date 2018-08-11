<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>T</span>SHED</a>
			</div>
			<div class="header-right">
			<a class="account" href="about.php">About Us</a>
			<!--language here -->
	<!-- Large modal -->
			<div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				Select Your Region</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <?php include("byregion_form.php");?>
								</div>
							</div>
						</div>
					</div>
				<script>
				$('#myModal').modal('');
				</script>
			</div>
		</div>
		</div>
	</div>
	<div class="main-banner banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with TSHED</h1>
			<p>Don't Worry about the Price ,TSHED also does it for You!</p>
			<!--<a href="post-ad.php">Post Free Ad</a>-->
          <a class="" data-toggle="modal" data-target="#myModal_2">
             POST YOUR AD</a>
					<div class="modal fade" id="myModal_2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										PLease enter your Email address</h4>
								</div>
								<div class="modal-body">
									 <?php include("very_email.php");?>
								</div>
							</div>
						</div>
					</div>
          
	  </div>
</div>