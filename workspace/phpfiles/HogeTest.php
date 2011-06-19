<?php
require_once 'Hoge.php';
class HogeTest extends PHPUnit_Framework_TestCase
{
	/** @var Hoge $hoge */
	private $hoge;
	public function setUp() {
		$this->hoge = new Hoge();
	}
	
	/** @test */
	public function thisIsCopyAndPastePrograming() {
		$this->assertSame("Hoge", $this->hoge->thisIsCopyAndPastePrograming(0));
		$this->assertSame("1", $this->hoge->thisIsCopyAndPastePrograming(1));
		$this->assertSame("3", $this->hoge->thisIsCopyAndPastePrograming(3));
		$this->assertSame("7", $this->hoge->thisIsCopyAndPastePrograming(7));
		$this->assertSame("Hoge", $this->hoge->thisIsCopyAndPastePrograming(8));
	}
	
	/** @test */
	public function hasUnUsedParameterMethod() {
		$this->assertSame("Used", $this->hoge->hasUnUsedParameterMethod("UnUsed", "Used"));
	}
	
	/** @test */
	public function complexMethod() {
		$this->assertSame("complexMethod", $this->hoge->complexMethod(array("hoge", "bar")));
		$this->assertSame(3, $this->hoge->complexMethod(array("hoge", 3)));
	}
}