<?php

/**
 * Classe para a questao de POO.
 * construtor recebe os 3 valores para serem multiplicados (os mesmos serao forçados para valores numericos (floatval))
 * get/set para cada uma das 3 propriedades permite testar e setar os valores
 * metodo multiplica() retorna o produto das 3 propriedades.
 */
class MultiplicaPropriedades  
{
	private $prop_1;
	private $prop_2;
	private $prop_3;
	
	function __construct($p1, $p2, $p3)
	{
		$this->setProp1(floatval($p1));
		$this->setProp2(floatval($p2));
		$this->setProp3(floatval($p3));
		
	}

	public function getProp1()
	{
		return $this->prop_1;
	}
	public function setProp1($valor)
	{
		$this->prop_1 = floatval($valor);
		return true;
	}
	public function getProp2()
	{
		return $this->prop_2;
	}
	public function setProp2($valor)
	{
		$this->prop_2 = floatval($valor);
		return true;
	}
	public function getProp3()
	{
		return $this->prop_3;
	}
	public function setProp3($valor)
	{
		$this->prop_3 = floatval($valor);
		return true;
	}

	public function multiplica()
	{
		return $this->getProp1() * $this->getProp2() * $this->getProp3();
	}
}


$teste = new MultiplicaPropriedades(5, 5.5, '7');

echo "\nvalor inicial da prop_1: ".$teste->getProp1();
$teste->setProp1(1);
echo "\nvalor alterado da prop_1: ".$teste->getProp1();

echo "\nproduto dos valores: " . $teste->multiplica();
