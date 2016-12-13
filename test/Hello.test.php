<?php
namespace andriinavrotskii\Packtest;
/**
* 
*/
class HelloTest extends \PHPUnit_Framework_TestCase
{
    
    public function testTrue ()
    {
        $this->assertTrue(true);
    }

    public function testInheritance ()
    {
        $hello = new Hello();
        $this->assertInstanceOf("\andriinavrotskii\Packtest\Hello", $hello);
    }
}