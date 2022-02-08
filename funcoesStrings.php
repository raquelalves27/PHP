<html>
<head>
<title>
php
</title>
</head>
<body>
     <?php
         // funçoes com strings
//deixando tudo minusculo
echo strtolower ($phrase), "<br>";
//deixando tudo maiusculo
echo strtoupper ($phrase), "<br>";
//Quantos caracteres existem 
echo strlen ($phrase), "<br>"; //contando com os espaços
//primeiro caractere da string 
echo $phrase[0], "<br>";//não esqueça que contamos a partir do zero 

//é possivel mudar o caractere
$phrase[18] = "!";
echo $phrase;
echo "<br>";
//Mudar uma palavra inteira
echo str_replace("To be or","NOT NOT", $phrase); // palavra existente e dps a que queremos mudar, apos a variavel da frase
echo "<br>";
//mostrar somente 3 caracteres apos o caractere 8
echo substr($phrase, 8, 3 );
echo "<br>";
?>

  
  </body>
</html>