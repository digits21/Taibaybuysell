<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
   
<head>
<title>Resale a Business Category Flat Bootstrap Responsive Website Template | Categories :: w3layouts</title>
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
	
	<!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container">
			<h2 class="head">Main Categories</h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<ul class="resp-tabs-list hor_1">
						<li>Mobiles</li>
						<li>Electronics & Appliances</li>
						<li>Cars</li>
						<li>Bikes</li>
						<li>Furniture</li>
						
						<li>Fashion</li>
						
						<a href="all-classifieds.php">All Ads</a>
					</ul>
					<div class="resp-tabs-container hor_1">
						<span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>All Taiwan</strong> (Select your city to see local ads)</span>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat1.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Mobiles</h4>
									<span>
                <?php 
                        include("connect.php");
   $count=0;
                         $req=$pdo->prepare('SELECT id FROM mobiles');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count++;   
                                        }
                                        echo "".$count.""?> Ads</span>
									<a href="mobiles.php">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="mobiles.php">mobile phones</a></li>
									<li><a href="mobiles.php">Tablets</a></li>
									<li><a href="mobiles.php">Accessories</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat2.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Electronics & Appliances</h4>
				<span><?php 
                                            $count_2=0;
                        $res=$pdo->query('SELECT * FROM electronics');
                                        while($row_el=$res->fetch())
                                        {
                                           $count_2++; 
                                            
                                        }echo "".$count_2."";?> Ads</span>
									<a href="electronics-appliances.php">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="electronics-appliances.php">Computers & accessories</a></li>
									<li><a href="electronics-appliances.php">Tv - video - audio</a></li>
									<li><a href="electronics-appliances.php">Cameras & accessories</a></li>
									<li><a href="electronics-appliances.php">Games & Entertainment</a></li>
									<li><a href="electronics-appliances.php">Fridge - AC - Washing Machine</a></li>
									<li><a href="electronics-appliances.php">Kitchen & Other Appliances</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat3.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Cars</h4>
									<span><?php
                                         $count_3=0;
                                        $req_2=$pdo->query('SELECT * FROM cars');
                                        while($row_2=$req_2->fetch())
                                        {
                                            $count_3++;
                                        }
                                        
                                        echo "".$count_3."";?> Ads</span>
									<a href="cars.php">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="cars.php">Commercial Vehicles</a></li>
									<li><a href="cars.php">Other Vehicles</a></li>
									<li><a href="cars.php">Spare Parts</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat4.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Bikes</h4>
									<span><?php
                                         $count_4=0;
                                        $req_3=$pdo->query('SELECT * FROM cars');
                                        while($row_3=$req_3->fetch())
                                        {
                                            $count_4++;
                                        }
                                        
                                        echo "".$count_4."";?> Ads</span>
									<a href="bikes.php">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="bikes.php">Motorcycles</a></li>
									<li><a href="bikes.php">Scooters</a></li>
									<li><a href="bikes.php">Bicycles</a></li>
									<li><a href="bikes.php">Spare Parts</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat5.png" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Furniture</h4>
									<span><?php
                                         $count_5=0;
                                        $req_4=$pdo->query('SELECT * FROM cars');
                                        while($row_4=$req_4->fetch())
                                        {
                                            $count_5++;
                                        }
                                        
                                        echo "".$count_5."";?>Ads</span>
									<a href="furnitures.php">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="furnitures.php">Sofa & Dining</a></li>
									<li><a href="furnitures.php">Beds & Wardrobes</a></li>
									<li><a href="furnitures.php">Home Decor & Garden</a></li>
									<li><a href="furnitures.php">Other Household Items</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/fa1.jpg" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4>Fashion</h4>
									<span><?php
                                         $count_6=0;
                                    $req_5=$pdo->query('SELECT * FROM cars');
                                        while($row_5=$req_5->fetch())
                                        {
                                            $count_6++;
                                        }
                                        
                                        echo "".$count_6."";?> Ads</span>
									<a href="fashion.php">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="sub-categories">
								<ul>
									<li><a href="fashion.php">Clothes</a></li>
									<li><a href="fashion.php">Footwear</a></li>
									<li><a href="fashion.php">Accessories</a></li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
						<div>
							<div class="category">
								<div class="category-img">
									<img src="images/cat9.png" title="image" alt="" />
								</div>
								
								
								
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<hr></hr>
	<!-- //Categories -->
	<!--footer section start-->		
		<?php include("footer.php");?>
        <!--footer section end-->
</body>
</html>