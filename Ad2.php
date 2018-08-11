<?php
                     try {
                        $pdo = new PDO('mysql:host=localhost;dbname=addb', 'root', '');
                      } 
                    catch (PDOException $e) 
                         {
                             die('MySQL connection failed! ' . $e->getMessage());
                        echo $pdo->errorInfo();
                           }
                    
                 $req=$pdo->query('SELECT users.username,users.city,users.phone,users.city,users.date,mobiles.title,mobiles.description,mobiles.image,mobiles.price FROM users, mobiles WHERE users.id=mobiles.user_id ORDER BY users.date');
                       echo'<div class="featured-ads">';
                    echo'<h2 class="sear-head fer">Featured Ads</h2>';
                    while($row=$req->fetch())  {             
             
				
					
					echo'<div class="featured-ad">';
						echo'<a href="single.php">';
                            
                            
							echo'<div class="featured-ad-left">';
								echo'<img src="images/'.$row['image'].'" title="ad image" alt="" />';
							echo'</div>';
							echo'<div class="featured-ad-right">';
								echo'<h4>'.$row['description'].'</h4>';
								echo'<p>$ '.$row['price'].'</p>';
							echo'</div>';
							echo'<div class="clearfix"></div>';
						echo'</a>';
					echo'</div>';
                                   }
$pdo=null;
                    ?>