<?php
namespace Katas\Milkshake;

class MilkShakeStrategyB implements MilkShakeStrategy
{
    public $Strategy = "";

    public function PrepBerries()
    {
        $this->Strategy .= " Prep Berries BBB";
    }

    public function Blend()
    {
        $this->Strategy .= " Blend BBB";
    }

    public function Serve()
    {
        $this->Strategy .= " Serve BBB";
    }
}