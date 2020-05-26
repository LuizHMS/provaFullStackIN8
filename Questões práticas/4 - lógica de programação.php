<?php

function somaMultiplos3ou5($limite = 1000)
{
	$soma = 0;
	while ($limite > 0) {
		$limite--;
		if ($limite%3 === 0 || $limite%5 === 0) {
			$soma += $limite;
		}		
	}
	return $soma;
}

print_r(somaMultiplos3ou5(1000));