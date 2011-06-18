<?php
require_once 'Foo.php';
class FooTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function plusSimple() {
		$target = new Foo();
		
		$this->assertEquals(4, $target->plus(2, 2));
	}
	
	/** @test */
	public function plusSimple2() {
		$target = new Foo();
		
		$this->assertEquals(3, $target->plus(1, 2));
	}
}