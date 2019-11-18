<?php
namespace Katas\Milkshake;

use PHPUnit\Framework\Assert;

class TestMilkshakeStrategyPattern extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function TestMilkShakeStrategyA()
    {
        $milkShakeStrategy = new MilkShakeStrategyA();
        $milkShakeRestaraunt = new MilkshakeRestaraunt($milkShakeStrategy);
        $milkShakeRestaraunt->MakeMilkShake();
        Assert::assertEquals(" Prep Berries AAA Blend AAA Serve AAA", $milkShakeStrategy->Strategy);
    }

    /** @test */
    public function TestMilkShakeStrategyB()
    {
        $milkShakeStrategy = new MilkShakeStrategyB();
        $milkShakeRestaraunt = new MilkshakeRestaraunt($milkShakeStrategy);
        $milkShakeRestaraunt->MakeMilkShake();
        Assert::assertEquals(" Prep Berries BBB Blend BBB Serve BBB", $milkShakeStrategy->Strategy);
    }
}