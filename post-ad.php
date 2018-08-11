<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include("connect.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Post Ad :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
</head>
<body>
<?php include("header.php");?>
	
	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post an Ad</h2>
			<div class="post-ad-form">
				<form action="post_model.php" method="post" enctype="multipart/form-data">
				
					<label>Select Category <span>*</span></label>
					
					<select class="" name="option">
					  <option value="Select">Select Category</option>
					   <option value="mobiles">mobiles</option>
					  <option value="electronics">electronics</option>
					  <option value="cars">cars</option>
					  <option value="bikes">bikes</option>
					  <option value="furnitures">furnitures</option>
					  <option value="fashion">fashion</option>
					  
					</select>
					<div class="clearfix"></div>
					   <label>Select City <span>*</span></label>
					<select class="" name="city">
					<option value="Select">Select City</option>
					  <option value="Taipei">Taipei</option>
					   <option value="Hsinchu">Hsinchu</option>
					  <option value="Taichung">Taichung</option>
					  <option value="Kaoshiung">Kaoshiung</option>
					  <option value="Tainan">Tainan</option>
					 
					  
					</select>
					<div class="clearfix"></div>
					<label>Price<span>*</span></label>
					<input type="number" name="price"> 
					
					<div class="clearfix"></div>
					<label>Ad Title <span>*</span></label>
					<input type="text" class="phone" placeholder="" name="title">
					<div class="clearfix"></div>
					<label>Ad Description <span>*</span></label>
					<textarea class="mess" placeholder="Write few lines about your product" name="description"></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">

				<label>Photos for your ad :</label>	
					<div class="photos-upload-view">
						

						<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000"/>

						<div>
							<input type="file" id="fileselect" name="file" multiple accept="image/*"/>
							<div id="filedrag">or drop files here</div>
						</div>

						<div id="submitbutton">
							<button type="submit">Upload Files</button>
						</div> 

						

						<div id="messages">
						<p>Status Messages</p>
						</div>
						</div>
					<div class="clearfix"></div>
						<script src="js/filedrag.js"></script>
				</div>
					<div class="personal-details">
					
					
						<label>Your Name <span>*</span></label>
						<input type="text" class="name" placeholder="" name="name">
						<div class="clearfix"></div>
						<label>Your Mobile No <span>*</span></label>
						<input type="text" class="phone" placeholder="" name="phone">
						<div class="clearfix"></div>
						<label>Your Email Address<span>*</span></label>
						<input type="text" class="email" placeholder="" name="email">
                        <div class="clearfix"></div>
                        <label>Your  Password<span>*</span></label>
						<input type="password" class="name" placeholder="" name="pass">
                        <div class="clearfix"></div>
                        <label> Messenger link<span></span></label>
						<input type="text" class="name" placeholder="" name="link" value="your facebook page messenger link">
						<div class="clearfix"></div>
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.php" target="_blank">Terms of Use </a> and <a href="privacy.php" target="_blank">Privacy Policy</a></p>
					<input type="submit" value="POST" name="submit">					
					<div class="clearfix"></div>
				
					
					
					</div>
					</form>
					
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->
	<!--footer section start-->		
		<?php include("footer.php");?>   
        <!--footer section end-->
</body>
</html>