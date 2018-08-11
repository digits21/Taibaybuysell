<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Resale a Business Category Flat Bootstrap Responsive Website Template | All Classifieds :: w3layouts</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
    <script src="js/tabs.js"></script>
	
<script type="text/javascript">
$(document).ready(function () {    
var elem=$('#container ul');      
	$('#viewcontrols a').on('click',function(e) {
		if ($(this).hasClass('gridview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('list').addClass('grid');
				$('#viewcontrols').removeClass('view-controls-list').addClass('view-controls-grid');
				$('#viewcontrols .gridview').addClass('active');
				$('#viewcontrols .listview').removeClass('active');
				elem.fadeIn(1000);
			});						
		}
		else if($(this).hasClass('listview')) {
			elem.fadeOut(1000, function () {
				$('#container ul').removeClass('grid').addClass('list');
				$('#viewcontrols').removeClass('view-controls-grid').addClass('view-controls-list');
				$('#viewcontrols .gridview').removeClass('active');
				$('#viewcontrols .listview').addClass('active');
				elem.fadeIn(1000);
			});									
		}
	});
});
</script>
</head>
<body>
<?php include("header.php");?>
	<!-- Products -->
	<div class="total-ads main-grid-border">
		<div class="container">
			<?php include("CategoryList.php");?>
			<div class="all-categories">
				<h3> Select your category and find the perfect ad</h3>
				<ul class="all-cat-list">
					<li><a href="mobiles.php">Mobiles <span class="num-of-ads">
                        <?php
                           include("connect.php");
                        ?>
                        <?php $count_1=0;
                         $req=$pdo->prepare('SELECT id FROM mobiles');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count_1++;   
                                        }
                                        echo "".$count_1.""?></span></a></li>
					<li><a href="electronics-appliances.php">Electronics & Appliances  <span class="num-of-ads">
                        <?php $count_2=0;
                         $req=$pdo->prepare('SELECT id FROM electronics');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count_2++;   
                                        }
                                        echo "".$count_2.""?></span></a></li>
					
					<li><a href="furnitures.php">Furniture    <span class="num-of-ads">
                        <?php 
                                            $count_3=0;
                         $req=$pdo->prepare('SELECT id FROM furnitures');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count_3++;   
                                        }
                                        echo "".$count_3.""?></span></a></li>
					
					
					<li><a href="fashion.php">Fashion   <span class="num-of-ads">
                        <?php
                                            $count_4=0;
                         $req=$pdo->prepare('SELECT id FROM fashion');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count_4++;   
                                        }
                                        echo "".$count_4.""?></span></a></li>
					
					
					<li><a href="cars.php">Cars   <span class="num-of-ads">
                        <?php $count_5=0;
                         $req=$pdo->prepare('SELECT id FROM cars');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count_5++;   
                                        }
                                        echo "".$count_5.""?></span></a></li>
                    
                    <li><a href="bikes.php">bikes <span class="num-of-ads">
                        <?php 
                            $count_6=0;
                         $req=$pdo->prepare('SELECT id FROM bikes');
                         $req->execute();
                        while($row=$req->fetch())
                                        {
                                         $count_6++;   
                                        }
                                        echo "".$count_6.""?></span></a></li>
				</ul>
			</div>
			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="index.php">Home</a></li>
			  <li class="active">All Ads</li>
			</ol>
			<div class="ads-grid">
				<div class="side-bar col-md-3">
					<?php //include("name_search.php")?>
				<!-- Price range start-->
				<!--<div class="range">
					<h3 class="sear-head">Price range</h3>
							<ul class="dropdown-menu6">
								<li>
									                
									<div id="slider-range"></div>							
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>			
							</ul>
							<!---->
							<!--<script type="text/javascript" src="js/jquery-ui.js"></script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 50, 6000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
							
				</div>-->
				<?php include("Ad.php");?>
					<div class="clearfix"></div>
				</div>
				</div>
				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <?php include("sort.php");?>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
												<div id="container">
                                                    <!-- sort view-->
								<?php include("view_c.php");?>
								<!--<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>-->
								<div class="clearfix"></div>
							
                                        <?php
                                                    
                                                    include("classified.php");
                        ?>
								
						</div>
							</div>
						</div>
                          <div role="tabpanel" class="tab-pane fade in active" id="profile" aria-labelledby="home-tab">
						   <div>
												<div id="container">
                                                    <!-- sort view-->
								<?php include("view_c.php");?>
								<!--<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>-->
								<div class="clearfix"></div>
							
                                        <?php
                                                    include("classified.php");
 //include("connect.php");
/*$cit=isset($_GET['city'])?$_GET['city']:false;
 if(!$cit)
 {
     
    //echo "".$cit."";
                                       $i=1;
$req=$pdo->prepare('SELECT users.username,users.city,users.phone,users.city,users.date,
mobiles.title,mobiles.description,mobiles.image,mobiles.price,
cars.title,cars.description,cars.image,cars.price,
electronics.title,electronics.description,electronics.image,electronics.price,
bikes.title,bikes.description,bikes.image,bikes.price,
fashion.title,fashion.description,fashion.image,fashion.price,
furnitures.title,furnitures.description,furnitures.image,furnitures.price 
FROM users, mobiles,cars,electronics,bikes,fashion,furnitures 
WHERE users.city=:cit  ORDER BY users.date LIMIT 9');
     $req->execute(array('cit'=>$cit));
                                       
                                         while($row=$req->fetch())
                                         
                                         {
                                    echo' <ul class="list">';
								echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['image'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['description'].'</h5>';
									echo'<span class="adprice">Price:'.$row['price'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['date'].'</span>';
				            echo'<span class="cityname">City:'.$row['city'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['username'].'</br></span>';
                                 echo'<span class="date">Phone:'  .$row['phone'].'</span>';             
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';
                                         echo'</ul>';
                                         }
     
     
 }
else 
{
    
                                       $i=1;
$req=$pdo->query('SELECT users.username,users.city,users.phone,users.city,users.date,
mobiles.title,mobiles.description,mobiles.image,mobiles.price,
cars.title,cars.description,cars.image,cars.price,
electronics.title,electronics.description,electronics.image,electronics.price,
bikes.title,bikes.description,bikes.image,bikes.price,
fashion.title,fashion.description,fashion.image,fashion.price,
furnitures.title,furnitures.description,furnitures.image,furnitures.price 
FROM users, mobiles,cars,electronics,bikes,fashion,furnitures 
WHERE users.id=mobiles.user_id OR users.id=cars.user_id OR users.id=electronics.user_id OR users.id=bikes.user_id OR users.id=fashion.user_id OR users.id=furnitures.user_id ORDER BY users.date LIMIT 9');
                                       
                                         while($row=$req->fetch()){
                                    echo' <ul class="list">';
								echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['image'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['description'].'</h5>';
									echo'<span class="adprice">Price:'.$row['price'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['date'].'</span>';
				            echo'<span class="cityname">City:'.$row['city'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['username'].'</br></span>';
                                 echo'<span class="date">Phone:'  .$row['phone'].'</span>';             
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';
                                         echo'</ul>';}
}
                                         */           

                                        ?>
								
						</div>
							</div>
						</div>
                          <div role="tabpanel" class="tab-pane fade in active" id="samsa" aria-labelledby="home-tab">
						   <div>
												<div id="container">
                                                    <!-- sort view-->
								<?php include("view_c.php");?>
								<!--<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>-->
								<div class="clearfix"></div>
							
                                        <?php
                                                    include("classified_1.php");
 //include("connect.php");
/*$cit=isset($_GET['city'])?$_GET['city']:false;
 if($cit)
 {
     
   // echo "".$cit."";
                                       $i=1;
$req=$pdo->prepare('SELECT users.username,users.city,users.phone,users.city,users.date,
mobiles.title,mobiles.description,mobiles.image,mobiles.price,
cars.title,cars.description,cars.image,cars.price,
electronics.title,electronics.description,electronics.image,electronics.price,
bikes.title,bikes.description,bikes.image,bikes.price,
fashion.title,fashion.description,fashion.image,fashion.price,
furnitures.title,furnitures.description,furnitures.image,furnitures.price 
FROM users, mobiles,cars,electronics,bikes,fashion,furnitures 
WHERE users.city=:cit  ORDER BY users.date LIMIT 9');
     $req->execute(array('cit'=>$cit));
                                       
                                         while($row=$req->fetch())
                                         
                                         {
                                    echo' <ul class="list">';
								echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['image'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['description'].'</h5>';
									echo'<span class="adprice">Price:'.$row['price'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['date'].'</span>';
				            echo'<span class="cityname">City:'.$row['city'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['username'].'</br></span>';
                                 echo'<span class="date">Phone:'  .$row['phone'].'</span>';             
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';
                                         echo'</ul>';
                                         }
     
     
 }
else
{
    
                                       $i=1;
$req=$pdo->query('SELECT users.username,users.city,users.phone,users.city,users.date,
mobiles.title,mobiles.description,mobiles.image,mobiles.price,
cars.title,cars.description,cars.image,cars.price,
electronics.title,electronics.description,electronics.image,electronics.price,
bikes.title,bikes.description,bikes.image,bikes.price,
fashion.title,fashion.description,fashion.image,fashion.price,
furnitures.title,furnitures.description,furnitures.image,furnitures.price 
FROM users, mobiles,cars,electronics,bikes,fashion,furnitures 
WHERE users.id=mobiles.user_id OR users.id=cars.user_id OR users.id=electronics.user_id OR users.id=bikes.user_id OR users.id=fashion.user_id OR users.id=furnitures.user_id ORDER BY users.date LIMIT 9');
                                       
                                         while($row=$req->fetch()){
                                    echo' <ul class="list">';
								echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['image'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['description'].'</h5>';
									echo'<span class="adprice">Price:'.$row['price'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['date'].'</span>';
				            echo'<span class="cityname">City:'.$row['city'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['username'].'</br></span>';
                                 echo'<span class="date">Phone:'  .$row['phone'].'</span>';             
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';
                                         echo'</ul>';}
}
*/
                                        ?>
								
						</div>
							</div>
						</div>
						<ul class="pagination pagination-sm">
							<li><a href="#home">Prev</a></li>
							<li><a href="#profile">1</a></li>
							<li><a href="#samsa">2</a></li>
							<li><a href="#home">Next</a></li>
							
						</ul>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>   
	<!-- // Products -->
	<!--footer section start-->		
		<?php include("footer.php");?>
        <!--footer section end-->
                                                
</body>
</html>