<?php

namespace Katas\Milkshake;

class MilkshakeRestaraunt
{
    /**
     * @var MilkShakeStrategy
     */
    private $milkShakeStrategy;

    public function __construct(MilkShakeStrategy $milkShakeStrategy)
    {
        $this->milkShakeStrategy = $milkShakeStrategy;
    }

    public function MakeMilkShake()
    {
        $this->milkShakeStrategy->PrepBerries();
        $this->milkShakeStrategy->Blend();
        $this->milkShakeStrategy->Serve();
    }
}