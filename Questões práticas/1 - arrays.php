<?php
$siglas = ['ES', 'MG', 'RJ', 'SP'];
$nomes =  ['São Paulo', 'Rio de Janeiro', 'Minas Gerais', 'Espírito Santo'];

sort($siglas);
sort($nomes);

$estados = array_combine($siglas, $nomes);

foreach ($estados as $sigla => $nome) {
	echo $sigla .  "-" . $nome ;
	echo PHP_EOL;
}
?>