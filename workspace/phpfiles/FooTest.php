<?php
require_once 'Foo.php';
class FooTest extends PHPUnit_Framework_TestCase
{
	/** @var Foo $foo */
	private $foo;
	public function setUp() {
		$this->foo = new Foo();
	}
	/** @test */
	public function plusSimple() {
		$this->assertSame(4, $this->foo->plus(2, 2));
	}
	
	/** @test */
	public function plusSimple2() {
		$this->assertSame(3, $this->foo->plus(1, 2));
	}
	
	/** @test */
	public function thisIsCopyAndPastePrograming() {
		$this->assertSame("Foo", $this->foo->thisIsCopyAndPastePrograming(-1));
		$this->assertSame("1", $this->foo->thisIsCopyAndPastePrograming(0));
		$this->assertSame("3", $this->foo->thisIsCopyAndPastePrograming(2));
		$this->assertSame("7", $this->foo->thisIsCopyAndPastePrograming(6));
		$this->assertSame("Foo", $this->foo->thisIsCopyAndPastePrograming(7));
		
	}
}