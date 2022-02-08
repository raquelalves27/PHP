<html>
<head>
<title>
php
</title>
</head>
<body>
     <?php 
//      $characterName = "Raquel"; // variavel do tipo string
//      $characterAge = 17; // variavel do tipo numer



        echo "Hello World"; //echo - usado para viasualizar no navegador, o sistema leria como HTML
        echo "<hr>";
       echo "<h2>Raquel Site</h2>"; 

//        echo "the once was a woman named $characterName <br>";
//        echo "She was  $characterAge years old <br>";
//        $characterName = "Ana";
//        echo "She really liked the name $characterName <br>";

//        //tipos de caractere
//      $phrase = "To be or not To be";
//      $age = 17;
//      $gpa = 30.3; // variavel do tipo float
//      $isMale = true; //variavel do tipo bolean 
//      null; 
//     echo "<br>";

//     // funçoes com strings
// //deixando tudo minusculo
// echo strtolower ($phrase), "<br>";
// //deixando tudo maiusculo
// echo strtoupper ($phrase), "<br>";
// //Quantos caracteres existem 
// echo strlen ($phrase), "<br>"; //contando com os espaços
// //primeiro caractere da string 
// echo $phrase[0], "<br>";//não esqueça que contamos a partir do zero 

// //é possivel mudar o caractere
// $phrase[18] = "!";
// echo $phrase;
// echo "<br>";
// //Mudar uma palavra inteira
// echo str_replace("To be or","NOT NOT", $phrase); // palavra existente e dps a que queremos mudar, apos a variavel da frase
// echo "<br>";
// //mostrar somente 3 caracteres apos o caractere 8
// echo substr($phrase, 8, 3 );
// echo "<br>";

// //Trabalhando com numbers
// echo 40, "<br>";//numero inteiro sem decimal 
// echo 40.9090,"<br>"; //float interio com decimal 
// echo 5.7 + 9, "<br>";
// //ele fara as operações matemticas conforme a importancia
// echo 4 + 5 * 10,"<br>";//5 * 10 + 4
// //para começar com a operação que vem primeiro colocamos o parenteses 
// echo (4 + 5) * 10, "<br>";
//     $num = 10;
//     echo $num, "<br>";
//     //mais um 
//     $num++;
//     echo $num, "<br>";
//     //menos um 
//     $num--;
//     echo $num, "<br>";
//     //variavel num é igual ao valor da variavel + 25 agr
//     $num += 25;
//     echo $num, "<br>";
//     //nuero negatico ou positivo vai retornar o valor so que positivo 
//     echo abs(-10.90), "<br>";
//     //arredodar numero 
//     echo round(3.6);
   
     ?>
     <!-- recebendo - GET - a entrada - Input - do usuario 
    //form vai fazer a ação do index.php e o que vamos fazer com ele get- obter/pegar -->
    <form action="index.php" method="get">
   <!--//permitir que o usuario insira informações
    //me diga pra que serve-->
    <!--//tipo de entrata vai ser texto e o id dele sera name-->
      <h4> Name: <input type="text" name="name"></h4> 
      <h5>Age: <input type="numer" name="age"></h5>
      <!-- input do tipo enviar-->
      <input type="submit">
       
    </form>
    <br>

    Your Name is: <?php
    //$_GET - para obter informações que foram enviadas, [] <- fica o name que vc deu a cima.
    //POST - faz a mesma coisa que o GET so que mais seguro
    echo $_GET["name"], " <br> And Your Age is: ";
    echo $_GET["age"];
    ?>
   <br>
   <br>
  <!--Calculadora basica em php-->
  <form action="index.php" method="get">
  <b>Number :<input type="number" name="num1">
  <br>
  <b>Number :<input type="number" name="num2"><br>
  <input type="submit"> 
  <br> 
  <h4>  result of the sum:</h4>
    
    <?php echo $_GET["num1"] +  $_GET["num2"]; ?>
    <br>  <br> <hr> <br>

<!--Completando o texto-->
    <form action="index.php" method="get">
    Color:<input type="text" name="color"><br>
    PluralNoun:<input type="text" name="pluralNoun"><br>
    celebrity:<input type="text" name="celebrity"><br><br>

    <input type="submit"><br>
    </form>
    <br>
   <?php 
   $color = $_GET["color"];
   $pluralNoun = $_GET["pluralNoun"];
   $celebrity = $_GET["celebrity"];
   echo "Roses are $color<br>";
   echo "$pluralNoun are blue<br>";
   echo "I love $celebrity<br>";
   ?>
<!--Parametros URL - um valor que podemos adicionar-->


<!-- POST X GET
 Com o metodo GET tudo que eu digitar aparecera na URL 
 Qualquer um pode ver a informação-->
 <h5>Digite sua senha. - GET</h5>
 <form action="index.php" method="get">
 <input type="password" name="password">
 <input type="submit"> <br>
 <?php 
  echo $_GET["password"]
 ?>

 <!--Quando queremos que uma informação passe de forma segura entre o cliente e servidor usamos o method POST
 Recebemos mais informação do usuario usando o method POST
 Tudo o que digitarmos nn aparecera na URL -->
 
   <h5>Digite sua senha. - POST</h5>
   <form action="index.php" method="post">
   <input type="password" name="password">
   <input type="submit">
   <?php 
  echo $_POST["password"]
 ?>
 <br> <hr> <br>
 Arrays em php <br><br>
  <?php 
  //Arrays em php 
  $friends = array("Dom", "Dudu");
  //mudando elemento do array
  $friends[0] = "Janiele";
  $friends[5] = "Mike";
  echo $friends[0];
  echo count($friends);
 ?>
 <br> <hr> <br>
 Check box em php
 <br><br>
   <!--check box em php-->
<form action="index.php" method="post">
<!--[] - Vamos obter entradas de varias caixas de seleção
Isso significa que vamos armazenar todas as frutas dentro de um array-->
Aplles:<input type="checkbox" name="fruits[]" value ="apples">
Oranges:<input type="checkbox" name="fruits[]" value ="oranges">
Pears:<input type="checkbox" name="fruits[]" value ="pears">


<input type= "submit">

<?php
  //check box em php
  $fruits = $_POST["fruits"];
  //mostra todos os arrays selecionados
  //echo var_dump($fruits);

?>
<br><hr>

 <!--Associação de arrays-->
 <h5>Inserir Nome do Aluno</h5>
  <form action="index.php" method="post">
  <input type="text" name="name">
  <input type="submit"><br>
  
   <?php
   //cahamamos o key e obteos o value
      $grades = array("Raquel" => "A+", "Dom" => "B-");
      //echo $grades["Raquel"];
     
      //acessando um valor associado dentro de um array
      echo "<br> A nota do Aluno foi:", $grades[$_POST["name"]];
      
   ?>
  <hr>
  <!--Função em PHP-->
  <?php
  function sayHi() {
    echo "Hi !!<br>";
  }
  sayHi();

  function hello($name,$surname ) {
    echo "Hi  $name $surname!!<br>";
  }
  hello("Raquel", "Alves");
  hello("Dom", "Pinheiro");
  hello("Dudu", "sla");
  ?>
  <br><hr><br>
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
  <br><hr><br>
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

<form action="index.php" method="post">

 Name: <input type="text" name="name"> <br> <br>
 Desired Book: <input type="text" name="book">  <br> <br>
 Author: <input type="text" name="author">  <br> <br>
 <input type="submit">
 </form>
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