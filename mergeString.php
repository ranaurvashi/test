<?php

Class StringMerge{
	
	function stringMerger($str1, $str2){
		$arr1 = str_split($str1);
		$arr2 = str_split($str2);
		$count = (count($arr1) > count($arr2)) ? count($arr1) : count($arr2);
		$final_string = '';
		for ($i = 0; $i < $count; $i++) {
			$final_string .= (isset($arr1[$i])) ? $arr1[$i] : '';
			$final_string .= (isset($arr2[$i])) ? $arr2[$i] : '';
		}
		return $final_string;
	}
}

$obj = new StringMerge;
echo $result = $obj->stringMerger('MICHAEL','JORDAN');
?>