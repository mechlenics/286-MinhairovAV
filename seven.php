<?php
class snake {
	public $map;
	protected $pos;
	
	public function __construct($map,$pos=0){
		$this->map = $map;
		$this->pos = $pos;
	}

	public function move($stop){
		$this->pos = strpos($this->map, $stop, $this->pos) + strlen($stop);
	}

	public function eat($stop){
		$start = $this -> pos;
		$this->move($stop);
		
		for($i = $start; $i < $this->pos - strlen($stop); $i){
			$this->map[$i] = '*';
			$this->map[$i+1] = '>';
			echo $map;

		}
	}	
}

$ex1 = new snake('*y--------i', 9);
$ex1->move('y');
$ex1->eat('i');
echo $ex1->map;
?>
