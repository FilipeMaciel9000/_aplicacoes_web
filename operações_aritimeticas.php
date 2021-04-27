<!html>
<html lang="pt-br">
<head>
    <title>Operações aritimeticas com PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divece-width, initial-scale=1.0"/>
    <meta name="author" content="Filipe Rios Mariz Maciel"/>
    <meta name="keywords" content="Insira as palavras chaves aqui"/>
    <meta name="description" content="Faça uma breve descrição do site aqui"/>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div id="Interface">
<?php
/* Função desse codigo:
Vamos fazer atribuições pela url -> logo depois de php -> ?x= um número & y= Outro número;
Para poder entender como as operações matematicas funcionam; */
    $v1=$_GET["x"];
    $v2=$_GET["y"];
    echo "As variaveis recebidas foram $v1 e $v2";
    echo "<br/>A soma das duas variáveis vale: ".($v1+$v2);
    echo "<br/>A subtração das duas variáveis vale: ".($v1-$v2);
    echo "<br/>A multiplicação das duas variáveis vale: ".($v1*$v2);
    echo "<br/>A divisão das duas variáveis vale: ".($v1/$v2);
?>
	
</div>
</body>
</html>