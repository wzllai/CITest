<?php
require  __DIR__ . "/../../src/sdk/Hyq.php";
class HyqTest extends  PHPUnit_Framework_TestCase {
        public function testMyfunc() {
			$obj = new Hyq();
			$this->assertEquals(1, $obj->myfunc());
		}
}
