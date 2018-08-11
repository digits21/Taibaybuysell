<?php

//echo "".$_GET['catego']."";
 $page=isset($_GET['catego'])?$_GET['catego']:false;

 $mobile="Mobiles";
$furniture="Furniture";
$fashion="Fashion";
$electronics="Electronics & Appliances";
$cars="Cars";
$bikes="Bikes";
if($page==$mobile)
{
    header("refresh:1,mobiles.php");
}
else if($page==$furniture)
{
     header("refresh:1,furnitures.php");
}
else if($page==$fashion)
{
     header("refresh:1,fashion.php");
}
else if($page==$electronics)
{
     header("refresh:1,electronics-appliances.php");
}
else if($page==$cars)
{
      header("refresh:1,cars.php");
}
else if($page==$bikes)
{
      header("refresh:1,bikes.php");
}
else{
    header("refresh:1,all-classifieds.php");
    
}

?>