<?php
namespace Katas\Bowling;
class Game
{
    private $rolls = array();

    public function roll($pins)
    {
        $this->rolls [] = $pins;
    }

    public function score()
    {
        $runningScore = 0;
        $currentRoll = 0;
        for ($frame = 1; $frame <= 10; $frame++)
        {
            if ($this->IsStrike($currentRoll))
            {
                $runningScore += $this->rolls[$currentRoll + 1];
                $runningScore += $this->rolls[$currentRoll + 2];
                $runningScore += $this->rolls[$currentRoll];
                $currentRoll ++;
            }
            else
            {
                if ($this->IsSpare($currentRoll))
                    $runningScore += $this->rolls[$currentRoll + 2];
                $runningScore += $this->rolls[$currentRoll];
                $runningScore += $this->rolls[$currentRoll + 1];
                $currentRoll += 2;
            }
        }
        return $runningScore;
    }

    private function IsComingOffSpare($currentRoll)
    {
        if ($currentRoll >= 3)
        {
            return ($this->rolls[$currentRoll-3] + $this->rolls[$currentRoll-2]) == 10;
        }
        else
        {
            return false;
        }
    }

    private function IsSpare($currentRoll)
    {
        if ($currentRoll < count($this->rolls) - 1)
            if ($this->rolls[$currentRoll] + $this->rolls[$currentRoll+1] == 10)
                return true;
        return false;
    }

    /**
     * @param int $currentRoll
     * @return bool
     */
    private function IsStrike(int $currentRoll): bool
    {
        return $this->rolls[$currentRoll] == 10;
    }
}