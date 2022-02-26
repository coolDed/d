<?php 
class Human
{
	private static $i = 2550690;
	public $dna;
	public $text;
	public function __construct()
	{
		$this->dna = self::$i++;
		$this->text = "There is no spoon?";
	}
	public function __clone()
	{
		$this->dna = $this->dna."(cloned)";
	}
}

$neo = new Human;
$virtual = clone $neo;
echo "Neo DNA id: {$neo->dna}, text: {$neo->text}<br />";
echo "Virtual twin id: {$virtual->dna}, text: {$virtual->text}<br />";
?>