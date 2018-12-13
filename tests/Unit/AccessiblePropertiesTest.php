<?php

namespace Tests\Unit;

use App\Foo;
use PHPUnit\Framework\TestCase;

class AccessiblePropertiesTest extends TestCase
{
    /** @test */
    public function it_makes_properties_accessible()
    {
        // given
        $fooClass = new Foo;

        // when / then
        $this->assertEquals('Some value', $fooClass->a);
        $this->assertTrue(isset($foo->a));
    }
}