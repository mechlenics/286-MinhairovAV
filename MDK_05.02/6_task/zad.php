<?php
class snake
{
	public $line;
	protected $pos;
	
	public function __construct($line)
	{
		$this->line = $line;
	}

	public function move($stop)
	{
		$this->pos = strpos($this->map, $stop, $this->pos) + strlen($stop);
	}
	public function eat($stop){
		$start = $this -> pos;
		$this->move($stop);
		
		for($i = $start; $i < $this->pos - strlen($stop); $i++){
			$this->line[$i] = "*";
		}
	}	
}

$st1 = new snake(">-------------");
$st1->eat(">");

echo $st1->line;
echo "<br>";

$st2 = new snake("->------------");
$st2->eat(">");

echo $st2->line;
echo "<br>";

$st3 = new snake("---->---------");
$st3->eat(">");

echo $st3->line;
echo "<br>";

$st4 = new snake("---------->---");
$st4->eat(">");

echo $st4->line;
echo "<br>";
