<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <title>Operações aritimeticas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divece-width, initial-scale=1.0"/>
    <meta name="author" content="Filipe Rios Mariz Maciel"/>
    <meta name="keywords" content="HTML5, CSS3, JavaScript, PHP"/>
    <meta name="description" content="tutoriais para Webdev"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
      h3{
        font: 15pt Arial;
        color: #2F0FA7;
        font-weight: bold;
      }
    </style>
</head>
<body>
<div>
<?php
      /*
        Função desse codigo:
        Vamos fazer atribuições pela url(logo depois de php?x=$v1&y=$v2);p
        Para poder entender como as principais funções aritimeticas funcionam;
        Não se esqueça PEMDAS;
        <h1></h1> <h2></h2> <h3></h3> hierarquia de titulos;
        </br>quebra de linha;
        */
      $v1=$_GET["x"];
      $v2=$_GET["y"];
      echo "<h3> Os valores recebidos foram: $v1 e $v2 </h3>";
      echo "O valor absoluto de $v1 é ".abs($v1);
      echo "</br>O valor absoluto de $v2 é ".abs($v2);
      echo "</br> O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
      echo "</br> O valor de $v2<sup>$v1</sup> é ".pow($v2, $v1);
      echo "</br> A raiz de $v1 é ".sqrt($v1);
      echo "</br> A raiz de $v2 é ".sqrt($v2);
      echo "</br> O valor arredondado de $v1 é ".round($v1);
      echo "</br> O valor arredondado de $v2 é ".round($v2);
      echo "</br> O valor arredondado para cima de $v1 é ".ceil($v1);
      echo "</br> O valor arredondado para baixo de $v1 é ".floor($v1);
      echo "</br> O valor arredondado para cima de $v2 é ".ceil($v2);
      echo "</br> O valor arredondado para baixo de $v2 é ".floor($v2);
      echo "</br> O valor inteiro da variavel $v1 é ".intval($v1);
      echo "</br> O valor inteiro da variavel $v2 é ".intval($v2);
      echo "</br> O valor monetario da variavel $v1 é R$".number_format($v1,2,",",".");
      echo "</br> O valor monetario da variavel $v2 é R$".number_format($v2,2,",",".");
?>
</div>
</body>
</html>