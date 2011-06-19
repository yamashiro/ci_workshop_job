<?php
require_once 'IntToStr.php';

class Hoge {
	function thisIsCopyAndPastePrograming($val) {
		$val = IntToStr::intToStrBetween1_7($val);
		return $val ? $val : "Hoge"; 
	}
	
	function hasUnUsedParameterMethod($unuseParameter, $useParameter) {
		return $useParameter;
	}

	function complexMethod($array) {
		foreach($array as $val) {
			if ($val === 3) {
				if (true) {
					if (true) {}
					if (true) {}
					return $val;
				}
			}
		}
		if (true) { while (false) { if (true) {} } }
		if (true) { while (false) { if (true) {} } }
		return "complexMethod";
	}
}