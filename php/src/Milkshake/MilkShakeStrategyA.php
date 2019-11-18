<?php
namespace Katas\Milkshake;

class MilkShakeStrategyA implements MilkShakeStrategy
{
    public $Strategy = "";

    public function PrepBerries()
    {
        $this->Strategy .= " Prep Berries AAA";
    }

    public function Blend()
    {
        $this->Strategy .= " Blend AAA";
    }

    public function Serve()
    {
        $this->Strategy .= " Serve AAA";
    }
}