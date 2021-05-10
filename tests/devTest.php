<?php
require_once('./work/dev.php');
use PHPUnit\Framework\TestCase;
 
class devTest extends TestCase {
    public function test()
    {
        $obj = new dev();
        $this->assertEquals($obj->main(), "Hi");
    }
}
