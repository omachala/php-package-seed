<?php

namespace Omachala\PhpPackageSeed\Tests;

use Omachala\PhpPackageSeed\Example;
use Omachala\PhpPackageSeed\Interfaces\IExample;
use PHPUnit\Framework\TestCase;

/**
 * Class TestExample
 * @package Omachala\PhpPackageSeed\Tests
 */
class ExampleTest extends TestCase
{

    /**
     * @test
     */
    public function testInstance()
    {
        $this->assertInstanceOf(IExample::class, new Example());
    }

    /**
     * @test
     */
    public function testVariable()
    {
        $this->assertSame('abc', (new Example())->setVariable('abc')->getVariable());
    }

    /**
     * Example Mockery test. See docs: http://docs.mockery.io
     * @test
     */
    public function testMockery()
    {
        $mockInstance = \Mockery::mock('Example');
        $mockInstance->shouldReceive('getVariable')->andReturn('xyz');
        $this->assertEquals('xyz', $mockInstance->getVariable());
    }
}
