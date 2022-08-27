<?php

namespace food;

class Dish
{
    private $cost;
    private $name;
    private $type;

    function __construct(float $cost, string $name, string $type)
    {
        $this->cost = $cost;
        $this->name = $name;
        $this->type = $type;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

}