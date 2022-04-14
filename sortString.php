<?php
class SortString{
	function sortString($text){
		$txt = preg_replace('/[\-]/', '', $text);
		$stringParts = str_split(strtolower($txt));
		sort($stringParts);
		for ($i = 0; $i < count($stringParts)-1; $i++) {
			if ($stringParts[$i] == $stringParts[$i + 1]) {
				return false;
			}
		}
		return true;
	}
}

$obj = new SortString;
$result = $obj->sortString('documentarily');
echo $result;
?>
