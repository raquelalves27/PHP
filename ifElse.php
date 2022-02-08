<html>
<head>
<title>
php
</title>
</head>
<body>
<?php
    
  //if and else 
  //se vc é homem e alto
    $isMale = false;
    $isTall = true; 
    //se vc é homem e alto
     if ($isMale && $isTall) {
       echo "You are Male";
     }
     //se vc é homem mais nn é alto 
     elseif($isMale && !$isTall) {
        echo "You are a short male";
     }
     //Você não é um homem,mais é alto
     elseif (!$isMale && $isTall) {
       echo "You are not Male but are Tall";
     }
     //Você não é um homem e nem é alto
     elseif(!$isMale && !$isTall) {
       echo "You're not Male nor Tall ";
     } 

     //se vc não é homem
     else {
       echo "not is a Male";
     }
     "<br> <hr>"
  
 
  ?>
   </body>
</html>