<?php        
             try {
                
                 $pdo = new PDO('mysql:host=localhost;dbname=addb', 'root', '');
                 
                 } 
                   
           catch (PDOException $e) 
                         {
                             die('MySQL connection failed! ' . $e->getMessage());
                            echo $pdo->errorInfo();
                         }


	 
?>


