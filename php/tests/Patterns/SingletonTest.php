<?php
namespace Katas\Patterns;

class GameTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function TestGetInstanceReturnsSameInstance()
    {
        $a = Singleton::GetInstance();
        $b = Singleton::GetInstance();

        $this->assertSame($a, $b);
    }
}