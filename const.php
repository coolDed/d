<?php 
class cls
{
	const NAME = "cls";
	public function method()
	{
		echo self::NAME;
		echo "<br />";
		echo cls::NAME;
		echo "<br />";
	}
}

echo cls::NAME;
?>