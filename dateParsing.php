<?php
class ParseDate{
//	public $str = "The first Monday of October 2019";
	public $count_arr = ['first','second','third', 'fourth', 'fifth','last'];
	public $day_arr = ['Monday','tuesday','wednesday','thursday','friday', 'saturday','sunday'];
    public $month_arr = ['January','February','March','April','May','June','July','August','September','October','November','December'];
    
	function findIntersect($str, $arr){
		$res = array_intersect(explode(' ', $str),$arr);
		return $result = (is_array($res) && count($res) >0) ? reset($res) : '' ;
	}

	function fetchYear($str){
	    preg_match_all("/\d{4}$/", $str, $matches);
	    return $matches[0][0];
    }
    
	function dateConversion($str){
		$count = $this->findIntersect($str, $this->count_arr);
		$day = $this->findIntersect($str, $this->day_arr);
		$month = $this->findIntersect($str, $this->month_arr);
		$year = $this->fetchYear($str);
		
		$date_string = $count.' '.$day.' '.$month.' '.$year;
		return date("Y-m-d", strtotime($date_string));
	}
}

$obj = new ParseDate;
$result = $obj->dateConversion('The first Monday of October 2019');
echo $result;

?>
