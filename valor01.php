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
</style>
</head>
<body>
<div id="Interface">

<?php
	$valor = $_GET["v"];
	$r = sqrt($valor);
	echo "<h2>O valor enviado foi $valor</h2>";
	echo "<h3>Sua raiz quadrada é: </h3>".number_format($r,2);
?>
<a href="formulario01.php">Voltar</a>	
</div>
</body>
</html>