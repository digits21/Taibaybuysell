
                                        <?php
                                      include("connect.php");
                                        $i=1;
$req=$pdo->query('SELECT users.username,users.email,users.city,users.phone,users.link,users.city,users.date,mobiles.title,mobiles.description,mobiles.image,mobiles.price FROM users, mobiles WHERE users.id=mobiles.user_id ORDER BY users.date DESC LIMIT 18 ');
                                       
                                         while($row=$req->fetch()){
                                     echo' <ul class="list">';
								//echo'<a href="single.html">';
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
                                 echo'<div>';
                               echo'<div style="flaot:right">';
                                         echo'<a href="mailto:'.$row['email'].'"><input type="submit" value="via email" class=""></a>';
                                             echo'</div>';
                                             echo'<div class="clearfix"></div>';
                                            
                                             if($row['link'])
                                {     echo '<div style="flaot:left">';
                                    echo'<a href="'.$row['link'].'"><input type="submit" value=" via messenger" class=""></a>';
                                    echo'</div>';
                                 } 
                                             echo'</div>';
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> ';//</a>
                                         echo'</ul>';}
 
                                        ?>
								
								<!--<a href="single.html">
									<li>
									<img src="images/m2.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">It is a long established fact that a reader long established</h5>
									<span class="adprice">$310</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:45</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m3.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Contrary to popular belief, Lorem Ipsum is not</h5>
									<span class="adprice">$190</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:30</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m4.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">The standard chunk of Lorem Ipsum used since the</h5>
									<span class="adprice">$480</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:25</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m5.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h5>
									<span class="adprice">$859</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:24</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m6.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">But I must explain to you how all this mistaken idea of denouncing</h5>
									<span class="adprice">$1299</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:22</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</h5>
									<span class="adprice">$1099</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:21</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m7.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">On the other hand, we denounce with righteous dislike men</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:20</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m8.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$899</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:05</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m9.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">ducimus qui blanditiis praesentium voluptatum quos dolores et qua</h5>
									<span class="adprice">$199</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:04</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m10.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$250</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m11.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">who are so beguiled and demoralized by the charms of pleasure of the moment</h5>
									<span class="adprice">$189</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m12.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">you need to be sure there isn't anything embarrassing hidden</h5>
									<span class="adprice">$1090</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:03</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
								<a href="single.html">
									<li>
									<img src="images/m13.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">looked up one of the more obscure Latin words</h5>
									<span class="adprice">$599</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:02</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								<div class="clearfix"></div>
								</a>
							</ul>-->