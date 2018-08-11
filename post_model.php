<?php 



  

  include("connect.php");
 
  
   
   
	
if(isset($_POST['submit']))
{    //echo "".$_POST['name']."".$_POST['option']."".$_FILES['file']['name']."";
 
	$title=isset($_POST['title'])?$_POST['title']:false;
    $mail=isset($_POST['email'])?$_POST['email']:false;
    $pass=isset($_POST['pass'])?$_POST['pass']:false;
    $link=isset($_POST['link'])?$_POST['link']:false;
    $phone=isset($_POST['phone'])?$_POST['phone']:false;
	$decri=isset($_POST['description'])?$_POST['description']:false;
	$date=date(DATE_RFC2822);
	$city=isset($_POST['city'])?$_POST['city']:false;
	$user=isset($_POST['name'])?$_POST['name']:false;
	$price=isset($_POST['price'])?$_POST['price']:false;
	$table=isset($_POST['option'])?$_POST['option']:false;
	$imgfile=isset($_FILES['file']['name'])?$_FILES['file']['name']:false;
	$tmp_dir=isset($_FILES['file']['tmp_name'])?$_FILES['file']['tmp_name']:false;
	$img_size=isset($_FILES['file']['size'])?$_FILES['file']['size']:false;
    $user_id=1;
	// echo"".$title."".$decri."".$date."".$user."".$price."".$table."".$imgfile."".$tmp_dir."".$img_size."";
	
		 $upload_dir='images/'; // directory
		 
		 $imgExt=strtolower(pathinfo($imgfile,PATHINFO_EXTENSION)); // GET IMAGE EXTENSION
		 
		 $valid_ext=array('jpeg','jpg','png','gif');
		 
		 //rename uploading image
		 
		 $item_img=rand(1000,1000000).".".$imgExt;
		 // allow valid image format
		// echo"".$upload_dir."".$imgExt."".$item_img."";
		 
		 if(in_array($imgExt, $valid_ext))
		 {
			 if($img_size < 500000)
			 {
				 move_uploaded_file($tmp_dir,$upload_dir.$item_img);
			 }
			 else{
				 $erMsg="Sorry , your file is too large";
			 }
		 }
		 
		 else{
			 $erMsg="Sorry,only JPG,JPEG,PNG & GIF files are accepted :)";
		 }
	 
	 
	
    if(isset($user))
    {
        try
        {
            $stmt=$pdo->prepare('INSERT INTO users(username,email,password,phone,link,city) VALUES(:usrname,:mail,:pass,:phone,:link,:city)');
            $stmt->bindParam(':usrname',$user);
            $stmt->bindParam(':mail',$mail);
             $stmt->bindParam(':pass',$pass);
            $stmt->bindParam(':phone',$phone);
            $stmt->bindParam(':link',$link);
            $stmt->bindParam(':city',$city);
           // $stmt->bindParam(':date',$date);
        }
       
        catch(Exception $er)
         {
            die('insertion error'.$er->getMessage());
        
         }
        
    }
    
    if(!$stmt->execute())
    {
        echo $stmt->errorInfo()[2];
    }
    
    $req=$pdo->prepare('SELECT id FROM users WHERE phone='.$phone.'');
    // $req->execute();
        if(!$req->execute())
        {
            echo $req->errorInfo()[2];
        }
          else {
                
                  while($row=$req->fetch())
                  {
                        //echo"entered";
                      $user_id= $row['id'];
                      // echo "".$user_id."";
              
                  }
              }
    
	 if(isset($item_img))
	 { 
 /*$stmt =$pdo->exec('INSERT INTO mobiles(title,description,image,city,date,user,price) VALUES(\'iphone\',\'no scratches\',\'image\',\'taipei\',\'2016-Jul-Fri\',\'jean\',\'5000\')');*/
        
/*$res=$pdo->exec('INSERT INTO '.$table.'(title,description,image,city,price) VALUES(\''.$title.'\',\''.$decri.'\',\''.$imgfile.'\',\''.$city.'\',\''.$price.'\')');*/
      try{   $res=$pdo->prepare('INSERT INTO '.$table.'(title,description,image,city,price,user_id) VALUES(:titl,:decri,:img,:cty,:prce,:user_id)');
          
         $res->bindParam(':titl',$title);
         $res->bindParam(':decri',$decri);
         $res->bindParam(':img',$item_img);
         $res->bindParam(':cty',$city);
         $res->bindParam(':prce',$price);
         $res->bindParam(':user_id',$user_id);
        // $res->bindParam(':dte',$date);
         }
         catch(Exeption $e)
         {
             die('cant insert'.$e->getMessage());
            
         }
  //$stmt->execute( array($title,$decri,$imgfile,$city,$date,$user,$price));
 
  
         
             

	 
	if(!$res->execute())
	 {
        echo $res->errorInfo()[2];
		// echo"entered";
		 $erMsg="error while inserting try again :)";
		
	 }
	 else {
		 
         
         echo '<script language="javascript">';
echo 'alert(" Ad successfully Post  click ok to see it ")';
echo '</script>';
         $message='Hi dear '.$user.',\r\n We are so happy to hear using our ad plateform to post your items. Please notice that this is monthly payement ad Plateform service \r\n with a simbolic cost of 200NTDS\r\n .For the money transfert please process it via paypay at this account :ouedmenga@gmail.com.\r\n Thank you for using our service . \r\n Don\'\t worry about the price Taibaybuysell already does it for you. ';
         wordwrap($message,70,'\r\n');
        // mail($row['email'],'Welcome to Taibaybuysell',$message);
             header("refresh:1;all-classifieds.php#profile");
	 }
		 
	 }
}
$pdo=null;

?>