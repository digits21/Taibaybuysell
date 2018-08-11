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
					<?php // include ("name_search.php")?>
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
								<?php 
                                                    include("view_c.php");
								/*<!--<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>-->*/
								echo'<div class="clearfix"></div>';
							
                                        
                                        
                                      include("connect.php");
                                        $i=1;
$city=isset($_POST['city'])?$_POST['city']:false;
    
$req=$pdo->prepare('SELECT 
u.username name,u.email mail,u.phone tel,u.link url,u.date time,u.city,
m.title mob_title,m.description mob_dec,m.image mob_img,m.city mob_cit,m.price mob_pr,
f.title fu_title,f.description fu_dec,f.image fu_img,f.city fu_cit,f.price fu_pr,
fas.title fa_title,fas.description fa_dec,fas.image fa_img,fas.city fa_cit,fas.price fa_pr,
e.title el_title,e.description el_dec,e.image el_img,e.city el_cit,e.price el_pr,
c.title ca_title,c.description ca_dec,c.image ca_img,c.city ca_cit,c.price ca_pr,
b.title bi_title,b.description bi_dec,b.image bi_img,b.city bi_cit,b.price bi_pr
FROM users u
LEFT JOIN mobiles m ON u.id=m.user_id
LEFT JOIN furnitures f ON u.id=f.user_id
LEFT JOIN fashion fas ON u.id=fas.user_id
LEFT JOIN electronics e ON u.id=e.user_id
LEFT JOIN cars c ON u.id=c.user_id
LEFT JOIN bikes b ON u.id=b.user_id
WHERE u.city=:city_2
ORDER BY u.date DESC LIMIT 9');
    $req->bindParam('city_2',$city);
    

if (!$req->execute())
 {
    // die('cant insert'.$e->getMessage());
     echo $req->errorInfo()[2];
    //header("Location:mobiles.php");
 }   
                                       else
                                       {
                                           
                                        while($row=$req->fetch()){
                                            
                                    
                                            if($row['mob_img']&& $row['mob_dec'] && $row['mob_pr'] && $row['mob_title'] && $row['mob_cit']){
                                                
                                         echo' <ul class="list">';   
								//echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['mob_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['mob_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['mob_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['mob_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['mob_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';
                                    //</a>
                                          echo'</ul>';  }
                                             if($row['fu_img']&& $row['fu_dec'] && $row['fu_pr'] && $row['fu_title'] && $row['fu_cit']){
                                                //echo"entered"
                                            echo' <ul class="list">';
                                            //echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['fu_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['fu_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['fu_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['fu_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fu_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                  echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                           echo'</ul>'; }
                                             if($row['fa_img']&& $row['fa_dec'] && $row['fa_pr'] && $row['fa_title'] && $row['fa_cit'])
                                            {
                                                
                                            echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['fa_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['fa_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['fa_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['fa_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fa_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                  echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';
                                                // </a>
                                          echo'</ul>';  }
                                           
                                         if($row['el_img']&& $row['el_dec'] && $row['el_pr'] && $row['el_title'] && $row['el_cit']){
                                                
                                            echo' <ul class="list">';
                                            //echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['el_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['el_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['el_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['el_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['el_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                         echo'</ul>';}
                                            
                                       else if($row['ca_img']&& $row['ca_dec'] && $row['ca_pr'] && $row['ca_title'] && $row['ca_cit'])
                                        {
                                            
                                        echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['ca_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['ca_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['ca_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['ca_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['ca_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                           echo'</ul>';
                                        }
                                           if($row['bi_img']&& $row['bi_dec'] && $row['bi_pr'] && $row['bi_title'] && $row['bi_cit']){
                                                
                                            echo' <ul class="list">';
                                            //echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['bi_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['bi_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['bi_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['bi_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['bi_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                           echo'</ul>'; }
                                         
                                          }
                                          
                                        
                                       }
    


 

                                        
						echo'</div>';
				echo'</div>';
						echo '</div>';
                          echo'<div role="tabpanel" class="tab-pane fade in active" id="profile" aria-labelledby="home-tab">';
						   echo'<div>';
												echo '<div id="container">';
                                                    //<!-- sort view-->
								 include("view_c.php");
								//<!--<div class="sort">
								/*   echo'<div class="sort-by">';
									echo'	<label>Sort By : </label>';
										echo '<select>';
														echo '<option value="">Most recent</option>';
														echo'<option value="">Price: Rs Low to High</option>';
														echo'<option value="">Price: Rs High to Low</option>';
									echo'</select>';
									   echo'</div>';
									 </div>-->*/
								echo'<div class="clearfix"></div>';
							
                                        
                                       
                                     // include("connect.php");
                                        $i=1;
$city_2=isset($_POST['city'])?$_POST['city']:false;
    
$req=$pdo->prepare('SELECT 
u.username name,u.email mail,u.phone tel,u.link url,u.date time,
m.title mob_title,m.description mob_dec,m.image mob_img,m.city mob_cit,m.price mob_pr,
f.title fu_title,f.description fu_dec,f.image fu_img,f.city fu_cit,f.price fu_pr,
fas.title fa_title,fas.description fa_dec,fas.image fa_img,fas.city fa_cit,fas.price fa_pr,
e.title el_title,e.description el_dec,e.image el_img,e.city el_cit,e.price el_pr,
c.title ca_title,c.description ca_dec,c.image ca_img,c.city ca_cit,c.price ca_pr,
b.title bi_title,b.description bi_dec,b.image bi_img,b.city bi_cit,b.price bi_pr
FROM users u
LEFT JOIN mobiles m ON u.id=m.user_id
LEFT JOIN furnitures f ON u.id=f.user_id
LEFT JOIN fashion fas ON u.id=fas.user_id
LEFT JOIN electronics e ON u.id=e.user_id
LEFT JOIN cars c ON u.id=c.user_id
LEFT JOIN bikes b ON u.id=b.user_id
WHERE u.city=:cit
ORDER BY u.date DESC LIMIT 9');
  $req->bindParam('cit',$city_2);  

if (!$req->execute())
 {
    // die('cant insert'.$e->getMessage());
     echo $req->errorInfo()[2];
    //header("Location:mobiles.php");
 }   
                                       else
                                       {
                                           
                                        while($row=$req->fetch()){
                                            
                                    
                                            if($row['mob_img']&& $row['mob_dec'] && $row['mob_pr'] && $row['mob_title'] && $row['mob_cit']){
                                                
                                         echo' <ul class="list">';   
								//echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['mob_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['mob_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['mob_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['mob_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['mob_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                               echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                          echo'</ul>';  }
                                             if($row['fu_img']&& $row['fu_dec'] && $row['fu_pr'] && $row['fu_title'] && $row['fu_cit']){
                                                //echo"entered"
                                            echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['fu_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['fu_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['fu_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['fu_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fu_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                               echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                           echo'</ul>'; }
                                             if($row['fa_img']&& $row['fa_dec'] && $row['fa_pr'] && $row['fa_title'] && $row['fa_cit'])
                                            {
                                                
                                            echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['fa_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['fa_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['fa_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['fa_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fa_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                               echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                          echo'</ul>';  }
                                           
                                         if($row['el_img']&& $row['el_dec'] && $row['el_pr'] && $row['el_title'] && $row['el_cit']){
                                                
                                            echo' <ul class="list">';
                                            //echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['el_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['el_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['el_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['el_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['el_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                               echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                         echo'</ul>';}
                                            
                                       else if($row['ca_img']&& $row['ca_dec'] && $row['ca_pr'] && $row['ca_title'] && $row['ca_cit'])
                                        {
                                            
                                        echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['ca_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['ca_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['ca_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['ca_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['ca_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                           echo'</ul>';
                                        }
                                           if($row['bi_img']&& $row['bi_dec'] && $row['bi_pr'] && $row['bi_title'] && $row['bi_cit']){
                                                
                                            echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['bi_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['bi_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['bi_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['bi_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['bi_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                           echo'</ul>'; }
                                         
                                          }
                                          
                                        
                                       }
    


 

                                       
								
						echo'</div>';
							echo'</div>';
						echo'</div>';
                          echo'<div role="tabpanel" class="tab-pane fade in active" id="samsa" aria-labelledby="home-tab">';
						   echo'<div>';
												echo'<div id="container">';
                                                  //  <!-- sort view-->
								 include("view_c.php");
								/*<!--<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>-->*/
								echo'<div class="clearfix"></div>';
							
                                        
                                       
                                     // include("connect.php");
                                        $i=1;

    
    
$req=$pdo->prepare('SELECT 
u.username name,u.email mail,u.phone tel,u.link url,u.date time,
m.title mob_title,m.description mob_dec,m.image mob_img,m.city mob_cit,m.price mob_pr,
f.title fu_title,f.description fu_dec,f.image fu_img,f.city fu_cit,f.price fu_pr,
fas.title fa_title,fas.description fa_dec,fas.image fa_img,fas.city fa_cit,fas.price fa_pr,
e.title el_title,e.description el_dec,e.image el_img,e.city el_cit,e.price el_pr,
c.title ca_title,c.description ca_dec,c.image ca_img,c.city ca_cit,c.price ca_pr,
b.title bi_title,b.description bi_dec,b.image bi_img,b.city bi_cit,b.price bi_pr
FROM users u
LEFT JOIN mobiles m ON u.id=m.user_id
LEFT JOIN furnitures f ON u.id=f.user_id
LEFT JOIN fashion fas ON u.id=fas.user_id
LEFT JOIN electronics e ON u.id=e.user_id
LEFT JOIN cars c ON u.id=c.user_id
LEFT JOIN bikes b ON u.id=b.user_id
WHERE u.city=:city_3
ORDER BY m.price,f.price,fas.price,e.price,c.price,b.price DESC LIMIT 9');
    $req->bindParam('city_3',$city);

if (!$req->execute())
 {
    // die('cant insert'.$e->getMessage());
     echo $req->errorInfo()[2];
    //header("Location:mobiles.php");
 }   
                                       else
                                       {
                                            echo' <ul class="list">';
                                        while($row=$req->fetch()){
                                            
                                   
                                            if($row['mob_img']&& $row['mob_dec'] && $row['mob_pr'] && $row['mob_title'] && $row['mob_cit']){
                                                
                                            
								//echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['mob_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['mob_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['mob_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['mob_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['mob_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';
                                            }
                                             if($row['fu_img']&& $row['fu_dec'] && $row['fu_pr'] && $row['fu_title'] && $row['fu_cit']){
                                                //echo"entered"
                                            
                                            //echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['fu_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['fu_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['fu_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['fu_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fu_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';
                                            }
                                             if($row['fa_img']&& $row['fa_dec'] && $row['fa_pr'] && $row['fa_title'] && $row['fa_cit'])
                                            {
                                                
                                            
                                          //  echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['fa_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['fa_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['fa_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['fa_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fa_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                               echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';
                                            }
                                           
                                         if($row['el_img']&& $row['el_dec'] && $row['el_pr'] && $row['el_title'] && $row['el_cit']){
                                                
                                            
                                            //echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['el_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['el_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['el_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['el_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['el_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }	echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';}
                                            
                                       else if($row['ca_img']&& $row['ca_dec'] && $row['ca_pr'] && $row['ca_title'] && $row['ca_cit'])
                                        {
                                            
                                        
                                            echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['ca_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['ca_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['ca_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['ca_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['ca_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';
                                        }
                                           if($row['bi_img']&& $row['bi_dec'] && $row['bi_pr'] && $row['bi_title'] && $row['bi_cit']){
                                                
                                            
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['bi_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['bi_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['bi_pr'].'$</span>';
									echo'<p class="catpath">Mobile Phones » '.$row['bi_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['bi_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                              echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';
                                            }
                                         
                                         }
                                           echo'</ul>';
                                        
                                       }
    


 

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