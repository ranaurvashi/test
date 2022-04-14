<?php
Class SuperDigit{
	function addValues($number){
		$arr = str_split($number);
		return $sum = array_sum($arr);
	}
	function checkForSuperDigit($number){
		$sum = $this->addValues($number);
		if($sum >9)
			$sum = $this->addValues($sum);
		return $sum;
	}
}

$obj = new SuperDigit;
echo $result = $obj->checkForSuperDigit(98);


?>
