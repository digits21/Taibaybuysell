<?php
$submit=isset($_POST['submit'])?$_POST['submit']:false;
$to=isset($_POST['verify'])?$_POST['verify']:false;
$subject="TSHED Email verification";
$message="Welcome to TaiBayBuySell this is an email verification procedure, Please click in the  to go back and post ";
//$header='From <ouedmenga@gmail.com>'."\r\n";
//$header.="Content-type/html;charset=UTF8"."\r\n";
$exist=false;
if($submit){
    

 include("connect.php");
$req=$pdo->query('SELECT * FROM users');
 while ($row=$req->fetch())
 {
     if($row['email']==$to)
     {
         $exist=true;
         /*echo '<script language="javascript">';
echo 'alert("Your email is already verified click ok to continue")';
echo '</script>';*/
    header("Location:post-ad.php");
         exit();
         
       }
     
}
if(!$exist)
{
    

    mail($to,$subject,$message);
    echo '<script language="javascript">';
echo 'alert(" An Email has to been sent to your address ! Please verify your Email box :) ")';
    
echo '</script>';
    echo'<a href="index.php">Back</a>';
    
}
    
}

?>