
                                        <?php
                                      include("connect.php");
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

ORDER BY u.date DESC LIMIT 9');
    

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
									echo'<p class="catpath">Type » '.$row['mob_title'].'</p>';
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
									//echo'</li> </a>';
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
									echo'<p class="catpath"> Type >> '.$row['fu_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fu_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                                echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									//echo'</li> </a>';
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
									echo'<p class="catpath">Type » '.$row['fa_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['fa_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                                         echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									//echo'</li> </a>';
                                          echo'</ul>';  }
                                           
                                         if($row['el_img']&& $row['el_dec'] && $row['el_pr'] && $row['el_title'] && $row['el_cit']){
                                                
                                            echo' <ul class="list">';
                                           // echo'<a href="single.html">';
								echo'	<li> ';  //echo "".$count_5."";
									echo'<img src="images/'.$row['el_img'].'" title="" alt="" />';
									echo'<section class="list-left">';
									echo'<h5 class="title">Description:'.$row['el_dec'].'</h5>';
									echo'<span class="adprice">Price:'.$row['el_pr'].'$</span>';
									echo'<p class="catpath">Type » '.$row['el_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['el_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                                           echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									echo'</li> </a>';
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
									echo'<p class="catpath">Type » '.$row['ca_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['ca_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                                           echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									//echo'</li> </a>';
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
									echo'<p class="catpath">Type » '.$row['bi_title'].'</p>';
									echo'</section>';
									echo'<section class="list-right">';
								echo'<span class="date">Date:'.$row['time'].'</span>';
				            echo'<span class="cityname">City:'.$row['bi_cit'].'</span>';
                                 echo'<span class="date">Poster:'  .$row['name'].'</br></span>';
                                 echo'<a href="mailto:'.$row['mail'].'"><input type="submit" value="Via Email" class=""></a>';                                                 echo'<div class="clearfix"></div>';
                                                if($row['url'])
                                {
                                    echo'<a href="'.$row['url'].'"><input type="submit" value="via messenger" class=""></a>';
                                }
									echo'</section>';
									echo'<div class="clearfix"></div>';
									//echo'</li> </a>';
                                           echo'</ul>'; }
                                         
                                          }
                                          
                                        
                                       }
    


 

                                        ?>