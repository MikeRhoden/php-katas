<?php
namespace Katas\Bowling;

class GameTest extends \PHPUnit\Framework\TestCase
{
    protected $game;

    protected function setUp(): void
    {
        $this->game = new Game();
    }

    public function testGutterGame()
    {
        $this->RollMany(20,0);
        $this->assertEquals(0, $this->game-> score());
    }

    public function testAllOnes()
    {
        for ($i = 0; $i < 20; ++$i)
            $this->game->roll(1);
        $this->assertEquals(20, $this->game-> score());
    }

    public function testSpare()
    {
        $this->RollSpare();
        $this->game->roll(3);
        $this->RollMany(17,0);
        $this->assertEquals(16, $this->game-> score());
    }

    public function testOneStrike()
    {
        $this->game->roll(10);
        $this->game->roll(3);
        $this->game->roll(4);
        $this->RollMany(17,0);
        $this->assertEquals(24, $this->game-> score());
    }

    public function testPerfectGame()
    {
        $this->RollMany(12,10);
        $this->assertEquals(300, $this->game-> score());
    }

    public function testAllSparesWith5s()
    {
        $this->RollMany(21,5);
        $this->assertEquals(150, $this->game-> score());
    }

    private function RollMany($rolls, $pins): void
    {
        for ($i = 0; $i < $rolls; ++$i)
            $this->game->roll($pins);
    }

    private function RollSpare(): void
    {
        $this->RollMany(2, 5);
    }
}