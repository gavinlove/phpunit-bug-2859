<?php

namespace Foo\DataProviderDeclaringClass;

use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    /**
     * @dataProvider provide
     */
    public function testFirst($x)
    {
        $this->assertTrue(true);
    }

    public function provide()
    {
        return [[true]];
    }
}
