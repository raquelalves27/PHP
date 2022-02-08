<html>
<head>
<title>
php
</title>
</head>
<body>
     <?php 
     //Trabalhando com numbers
echo 40, "<br>";//numero inteiro sem decimal 
echo 40.9090,"<br>"; //float interio com decimal 
echo 5.7 + 9, "<br>";
//ele fara as operações matemticas conforme a importancia
echo 4 + 5 * 10,"<br>";//5 * 10 + 4
//para começar com a operação que vem primeiro colocamos o parenteses 
echo (4 + 5) * 10, "<br>";
    $num = 10;
    echo $num, "<br>";
    //mais um 
    $num++;
    echo $num, "<br>";
    //menos um 
    $num--;
    echo $num, "<br>";
    //variavel num é igual ao valor da variavel + 25 agr
    $num += 25;
    echo $num, "<br>";
    //nuero negatico ou positivo vai retornar o valor so que positivo 
    echo abs(-10.90), "<br>";
    //arredodar numero 
    echo round(3.6);
   
     ?>

  
  </body>
</html>