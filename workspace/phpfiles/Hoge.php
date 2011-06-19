<?php
class Hoge {
	function thisIsCopyAndPastePrograming($val) {
		if ($val === 1) {
			return "1";
		} else if ($val === 2) {
			return "2";
		} else if ($val === 3) {
			return "3";
		} else if ($val === 4) {
			return "4";
		} else if ($val === 5) {
			return "5";
		} else if ($val === 6) {
			return "6";
		} else if ($val === 7) {
			return "7";
		}

		return "Hoge";
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