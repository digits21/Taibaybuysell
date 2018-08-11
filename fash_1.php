 <?php
                                      include("connect.php");
                                        $i=1;
$req=$pdo->query('SELECT users.username,users.email,users.city,users.phone,users.link,users.city,users.date,fashion.title,fashion.description,fashion.image,fashion.price FROM users, fashion WHERE users.id=fashion.user_id ORDER BY fashion.price LIMIT 9');
                                       
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