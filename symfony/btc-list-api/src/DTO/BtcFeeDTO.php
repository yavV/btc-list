<?php

declare(strict_types=1);

namespace App\DTO;

use JMS\Serializer\Annotation as JMS;

final class BtcFeeDTO
{
    /**
     * @var int
     * @JMS\Expose
     */
    public int $min = 0;

    /**
     * @var int
     * @JMS\Expose
     */
    public int $max = 0;

    /**
     * @var float
     * @JMS\Expose
     */
    public float $avg = 0;

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     */
    public function setMin(int $min): void
    {
        $this->min = $min;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     */
    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    /**
     * @return float
     */
    public function getAvg(): float
    {
        return $this->avg;
    }

    /**
     * @param float $avg
     */
    public function setAvg(float $avg): void
    {
        $this->avg = $avg;
    }
}
