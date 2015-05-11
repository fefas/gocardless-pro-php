<?php

namespace GoCardlessPro\Resources\Wrapper;

/**
 * Test Nested array behaviour that should
 * only allow getters and will recursively return getters.
 */
class NestedArrayTest extends \PHPUnit_Framework_TestCase
{
    public function testObjectGet()
    {
        $o = new NestedArray('test', (object) array('name' => 'jill'));
        // A side effect of this implementation - better than only allowing getters.
        $this->assertEquals('jill', $o['name']);
    }

    public function testArrayGet()
    {
        $json = json_decode('[1,2,3,4]');
        $o = new NestedArray('test', $json);
        $this->assertEquals(4, count($o));
        $this->assertEquals(3, $o[2]);
    }

    public function testNestedArrayGet()
    {
        $json = json_decode('[[1,2,3],1,2,3,4]');
        $o = new NestedArray('test', $json);
        $this->assertEquals(5, count($o));
        $this->assertEquals(2, $o[2]);
        $this->assertEquals(3, count($o[0]));
        $this->assertEquals(1, $o[0][0]);
    }

    public function testNestedObjectGet()
    {
        $json = json_decode('[{"age": 20},1,2,3,4]');
        $o = new NestedArray('test', $json);
        $this->assertEquals(5, count($o));
        $this->assertEquals(20, $o[0]->age());
    }
}