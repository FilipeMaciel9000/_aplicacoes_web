<!html>
<html lang="pt-br">
<head>
	<?php
		$txt = isset($_GET["t"])?$_GET["t"]:"No text";
		$tam = isset($_GET["tam"])?$_GET["tam"]:"8px";
		$cor = isset($_GET["cor"])?$_GET["cor"]:"#000000"; 
	?>
    <title>Título do site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divece-width, initial-scale=1.0"/>
    <meta name="author" content="Filipe Rios Mariz Maciel"/>
    <meta name="keywords" content="Insira as palavras chaves aqui"/>
    <meta name="description" content="Faça uma breve descrição do site aqui"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
<style>
     span.txt{
		font-size: <?php echo $tam;?>;
		color: <?php echo $cor;?>;
	}
</style>
</head>
<body>
<div id="Interface">
	<?php
		echo  "<span class='txt'> $txt </span>";
	?>
</div>
</body>
</html>=