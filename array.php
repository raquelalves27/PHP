<html>
<head>
<title>
php
</title>
</head>
<body>
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
  
  </body>
</html>