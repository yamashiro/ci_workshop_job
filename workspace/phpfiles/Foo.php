<?php
/**
 * This file is to use workshop, then this code is not mote.
 * @author yamashiro
 *
 */
require_once 'IntToStr.php';
class Foo {
	function thisIsCopyAndPastePrograming($val) {
		$val = $val + 1;
		$val = IntToStr::intToStrBetween1_7($val);
		return $val ? $val : "Foo"; 
	}
	
	function plus($a, $b) { 
		return $a + $b;
	}
} 