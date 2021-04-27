<!html>
<html lang="pt-br">
<head>
    <title>Título do site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divece-width, initial-scale=1.0"/>
    <meta name="author" content="Filipe Rios Mariz Maciel"/>
    <meta name="keywords" content="Insira as palavras chaves aqui"/>
    <meta name="description" content="Faça uma breve descrição do site aqui"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
<style>
     /*Comentário em CSS3*/
</style>
</head>
<body>
<div id="Interface">

<?php
	$nome = isset($_GET["nome"])?$_GET["nome"]:"[No info]";
	$ano =isset($_GET["ano"])?$_GET["ano"]:0;
	$sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[No info]";
	$idade =date("Y") - $ano; 
	echo "$nome é $sexo e têm $idade anos";
?>
	
</div>
</body>
</html>