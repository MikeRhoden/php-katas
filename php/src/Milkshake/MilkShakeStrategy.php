<?php

namespace Katas\Milkshake;

interface MilkShakeStrategy
{
    public function PrepBerries();

    public function Blend();

    public function Serve();
}