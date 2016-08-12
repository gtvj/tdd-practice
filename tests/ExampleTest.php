<?php

class ExampleTest extends PHPUnit_Framework_TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
        $this->assertArrayHasKey('foo', array('foo' => 'baz'));
        $this->assertContains(4, array(1, 2, 3, 4));
        $this->assertContainsOnly('string', array('1', '2', 'foo'));
        $this->assertEmpty(array());
        $this->assertGreaterThan(1, 3);
        $this->assertRegExp('/bar/', 'bar');
        $this->assertStringMatchesFormat('%i', '+3');

        // These are just some of the assertions provided by PHPUnit. Much more is available at https://phpunit.de

    }
}