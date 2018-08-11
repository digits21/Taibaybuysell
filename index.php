<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
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
</head>
<body>
<?php include("header.php");?>
	
		<!-- content-starts-here -->
		<div class="content">
			<div class="categories">
				<div class="container">
					<div class="col-md-2 focus-grid">
						<a href="categories.php">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-mobile"></i></div>
									<h4 class="clrchg">Mobiles</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.php#parentVerticalTab2">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-laptop"></i></div>
									<h4 class="clrchg"> Electronics & Appliances</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-2 focus-grid">
						<a href="categories.php#parentVerticalTab3">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-car"></i></div>
									<h4 class="clrchg">Cars</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="categories.php#parentVerticalTab4">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-motorcycle"></i></div>
									<h4 class="clrchg">Bikes</h4>
								</div>
							</div>
						</a>
					</div>	
					<div class="col-md-2 focus-grid">
						<a href="categories.php#parentVerticalTab5">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
									<h4 class="clrchg">Furnitures</h4>
								</div>
							</div>
						</a>
					</div>
					
					<div class="col-md-2 focus-grid">
						<a href="categories.php#parentVerticalTab8">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image"><i class="fa fa-asterisk"></i></div>
									<h4 class="clrchg">Fashion</h4>
								</div>
							</div>
						</a>
					</div>	
										
				<div class="clearfix"></div>
				</div>
			</div>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
                    <?php
             include("connect.php");
                    
                 $req=$pdo->query('SELECT users.username,users.city,users.phone,users.city,users.date,mobiles.title,mobiles.description,mobiles.image,mobiles.price FROM users, mobiles WHERE users.id=mobiles.user_id ORDER BY users.date LIMIT 3');
                    echo '<div class="trend-ads">';
                    echo '<h2>Trending Ads</h2>';
                    echo '<ul id="flexiselDemo3">';
                    
				    
                    while($row=$req->fetch()){
				
                    echo '<li>';
					
							echo '<div class="col-md-3 biseller-column">';
				        
								echo '<a href="mobiles.php">';
								echo '<img src="images/'.$row['image'].'"/>';
				echo '<span class="price">&#36; '.$row['price'].'</span>';
								echo'</a> ';
										echo '<div class="ad-info">';
				echo '<h5>'.$row['description'].'</h5>';
											echo'<span>'.$row['date'].'</span>';
										
                    echo'</div>';
                        
                        echo'</li>';
                        
                        
                        
                    }
                     while($row=$req->fetch()){
				
                    echo '<li>';
					
							echo '<div class="col-md-3 biseller-column">';
				        
								echo '<a href="mobiles.php">';
								echo '<img src="images/'.$row['image'].'"/>';
				echo '<span class="price">&#36; '.$row['price'].'</span>';
								echo'</a> ';
										echo '<div class="ad-info">';
				echo '<h5>'.$row['description'].'</h5>';
											echo'<span>'.$row['date'].'</span>';
										
                    echo'</div>';
                        
                        echo'</li>';
                        
                        
                        
                    }
                    
									//echo'</div>';
                        
                        echo'</lu>';
                    
                  //  $pdo=null;
                    ?>
								<!--	<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p2.jpg"/>
											<span class="price">&#36; 399</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p3.jpg"/>
											<span class="price">&#36; 199</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>8 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p4.jpg"/>
											<span class="price">&#36; 159</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>19 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p5.jpg"/>
											<span class="price">&#36; 1599</span>
										</a> 
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p6.jpg"/>
											<span class="price">&#36; 1099</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p7.jpg"/>
											<span class="price">&#36; 109</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p8.jpg"/>
											<span class="price">&#36; 189</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p9.jpg"/>
											<span class="price">&#36; 2599</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p10.jpg"/>
											<span class="price">&#36; 3999</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p11.jpg"/>
											<span class="price">&#36; 2699</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p12.jpg"/>
											<span class="price">&#36; 899</span>
										</a> 
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
								</li>
						</ul>-->
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
			<!-- //slider -->				
			<hr></hr>
		<!--footer section start-->		
		<?php include("footer.php");?>
        <!--footer section end-->
</body>
</html>