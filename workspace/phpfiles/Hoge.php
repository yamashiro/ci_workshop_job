<?php
require_once 'IntToStr.php';

class Hoge {
	function thisIsCopyAndPastePrograming($val) {
		$val = IntToStr::intToStrBetween1_7($val);
		return $val ? $val : "Hoge"; 
	}
	
	function hasUnUsedParameterMethod($useParameter) {
		return $useParameter;
	}

	function complexMethod($array) {
		$val = $this->foreachMethod($array);
		if (true) { while (false) { if (true) {} } }
		if (true) { while (false) { if (true) {} } }
		return $val ? $val : "complexMethod";
	}
	private function foreachMethod($array) {
		foreach($array as $val) {
			if ($val === 3) {
				if (true) {
					if (true) {}
					if (true) {}
					return $val;
				}
			}
		}
	}
}