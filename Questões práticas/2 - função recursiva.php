<?php

function recursiva($numero)
{
	if ( $numero%2 === 0 && $numero%3 === 0 && $numero%10 === 0) {
		return $numero;
	}else{
		return recursiva($numero +1);
	}
}

$menorInteiro = recursiva(1);

print_r($menorInteiro);

?>