<html>
<head>
<title>
php
</title>
</head>
<body>
<?php
   //class

class Book {
  var $name;
  var $book ;
  var $author ;


function __construct($aName, $aBook, $aAuthor){
  $this -> name = $aName;
  $this -> book = $aBook;
  $this -> author = $aAuthor;
 }
}


$book1 = new Book($_POST["name"], $_POST["book"], $_POST["author"]);



echo "You Name is: ", $book1 -> name, "<br>"; 
echo "Desired Book is: ", $book1 -> book, "<br>";
echo "Book Author is: ", $book1 -> author, "<br>";
?>

  
  </body>
</html>