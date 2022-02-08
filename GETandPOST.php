<html>
<head>
<title>
php
</title>
</head>
<body>
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
 
  
   
</body>
</html>