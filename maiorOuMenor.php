<html>
<head>
<title>
php
</title>
</head>
<body>
<?php
//maior ou menor numero em function
 echo getMax(2,3);
function getMax($num1, $num2) {
  if($num1 > $num2) {
    return $num1;
  }
  else {
    return $num2;
  }
}
?>
<br><hr><br>
</body>
</html>