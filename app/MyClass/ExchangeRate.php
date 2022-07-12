<?php

namespace App\MyClass;

class ExchangeRate
{
    public $effectiveDate;
    public $rate;

    public function __construct(string $effectiveDate, string $rate)
    {
        $this->$effectiveDate = $effectiveDate;
        $this->rate = $rate;
    }

    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    public function getRate(): string
    {
        return $this->rate;
    }
}
